<?php 
namespace Scrape;
// use Scrape\ISScraper;
// use Scrape\Table;
// use Scrape\Service;

class ISHelpers
{
    
    private $tableClass = "col-lg-6 col-lg-offset-3";
    
    function outputTablesSorted()
    {
        $scraper = new ISScraper();
        $tablespulled = $scraper->getTableList();
        $fkeys = $this->findForeignKeys($tablespulled);
        
        echo '<div class="row">';
        foreach ($tablespulled as $t) { ?>
        
        <div class="<?php echo $this->tableClass; ?>">
        <h2><?php echo $t->name ?></h2>
        <ul class="nav nav-tabs">
          <li class="active"><a href="#<?php echo $t->name; ?>" data-toggle="tab">Info</a></li>
          <li><a href="#<?php echo $t->name; ?>sql" data-toggle="tab">Sql</a></li>
        <?php if (isset($fkeys[$t->name])) : ?>
          
          <li><a href="#<?php echo $t->name; ?>fksql" data-toggle="tab">FKeys</a></li>
        <?php endif; ?>
        </ul>
        <div class="tab-content">
        <div class="tab-pane fade in active" id="<?php echo $t->name; ?>">


                <table class="table table-condensed table-striped table-hover">
                    <thead>
                        <th class="col1">Name</th>
                        <th class="col2">Type</th>
                        <th class="col3">Access</th>
                    </thead>
                    <tbody>
                        <?php
            // iterate through and output table fields
            foreach ($t->fields as $f) {
                if ($f->name == "Id") {
                    echo '<tr class="success"><td><i class="fa fa-key"></i>';
                } else if (strtolower($this->right($f->name, 2)) == "id") {
                    echo '<tr class="info"><td><i class="fa fa-link"></i>';
                } else {
                    echo '<tr><td>';
                }
                echo $f->name . '</td>';
                echo '<td>' . $f->type . '</td>';
                echo '<td>';
                $tmpstring = str_replace("Edit", '<span class="glyphicon glyphicon-floppy-open" title="Edit"></span>', $f->access);
                $tmpstring = str_replace("Delete", '<span class="glyphicon glyphicon-floppy-remove" title="Delete"></span>', $tmpstring);
                $tmpstring = str_replace("Read", '<span class="glyphicon glyphicon-floppy-save" title="Read"></span>', $tmpstring);
                $tmpstring = str_replace("Add", '', $tmpstring);
                
                echo $tmpstring;
                echo '</td>';
            }
?> 
                    </tbody>
                </table>
           
        </div>
        <div class="tab-pane fade" id="<?php echo $t->name."sql"; ?>">
            <pre>
            <code class="language-sql">
            <?php echo $this->getTableSQL($t); ?>
            </code>
            </pre>
        </div>
        <?php if (isset($fkeys[$t->name])) : ?>
        <div class="tab-pane fade" id="<?php echo $t->name."fksql"; ?>">
            <pre>
            <code class="language-sql">
            
            <?php foreach ($fkeys[$t->name] as $col=>$fks) {
                echo $fks;

                } ?>

            </code>
            </pre>
        </div>
    <?php endif; ?>
        </div><!--/.tab-content -->
        </div> <!-- Close table section -->
        <div class="clearfix"></div>
        <hr/>

        <?php $this->flush_buffers();
        }
    }
    
    function outputTablesSQL()
    {
        $scraper = new ISScraper();
        $tablespulled = $scraper->getTableList();
        // iterate tables
        echo "<div class=\"row\">";
        foreach ($tablespulled as $t) {
            echo "<div class=\"col-lg-6 col-lg-offset-3\">";
            echo "<pre class=\"prettyprint lang-sql\">";

            echo $this->getTableSQL($t);
            echo "</pre>\n";
            echo "</div>\n";
            $this->flush_buffers();
        }
        echo "</div>";
        echo "<hr/>";
        $this->findForeignKeys($tablespulled);
    }
    
    function getTableSQL($t)
    {
        $tableHasId = false;
        
        $sql = "CREATE TABLE " . $t->name . "(\n";
        foreach ($t->fields as $field) {
            $sql.= "  " . $field->name . " ";
            switch ($field->type) {
                case 'int':
                    $sql.= "INT ";
                    break;

                case 'string':
                    $sql.= "VARCHAR(100) ";
                    break;

                case 'double':
                    $sql.= "DECIMAL ";
                    break;

                case 'blob':
                    $sql.= "BLOB ";
                    break;

                case 'datetime':
                    $sql.= "DATETIME ";
                    break;

                case 'bool':
                    $sql.= "TINYINT(1) ";
                    break;
                
                case 'long':
                    $sql.= "INT ";
                    break;

                case 'enum':
                    $sql.= "VARCHAR(100) ";
                    break;

                default:
                    $sql.= "ERROR(" . $field->type . ") ";
                    break;
                    // code...
                    break;
            }
            if ($field->name == "Id") {
                $sql.= "NOT NULL,\n";
                $tableHasId = true;
            } else if (strtolower($this->right($field->name, 2)) == "id") {
                $sql.= "NOT NULL,\n";
            } else {
                $sql.= "NULL,\n";
            }
        } //end field iteration
        
        if ($tableHasId) {
            $sql.= "PRIMARYKEY(Id)\n";
        }
        
        $sql.= ");";
        
        return $sql;
    }
    
    function findForeignKeys($tablespulled)
    {
        $exceptions = array(
            "CCharge" => array(
                "CreditCard" => "CC",
                false => "Merchant"
            ) ,
            "ContactGroupAssign" => array(
                "ContactGroup" => "Group"
            ) ,
            "Affiliate" => array(
                "Affiliate" => "Parent"
            ) ,
            "Company" => array(
                "User" => "Owner",
                false => "Account",
            ) ,
            "Contact" => array(
                "User" => "Owner",
                false => "Account",
            ) ,
            "DataFormField" => array(
                "DataFormGroup" => "Group",
                false => "Form",
            ) ,
            "Invoice" => array(
                "Affiliate" => "LeadAffiliate"
            ) ,
            "Payment" => array(
                "CCharge" => "Charge",
                "Payment" => "Refund"
            ) ,
            "Job" => array(
                "JobRecurringInstance" => "JobRecurring"
            ) ,
            "OrderItem" => array(
                "Job" => "Order"
            ) ,
            "ContactAction" => array(
                "Lead" => "Opportunity"
            ) ,
            "ContactGroup" => array(
                false => "GroupCategory"
            ) ,
            "DataFormGroup" => array(
                "User" => "Owner",
                "DataFormTab" => "Tab"
            ) ,
            "DataFormTab" => array(
                false => "Form"
            ) ,
            "GroupAssign" => array(
                "UserGroup" => "Group"
            ) ,
            "JobRecurringInstance" => array(
                "RecurringOrder" => "Recurring"
            ) ,
            
            "ProductCategory" => array(
                "ProductCategory" => "Parent"
            ) ,
            "ProductInterest" => array(
                false => "Object"
            ) ,
            
            "RecurringOrder" => array(
                "Affiliate" => "LeadAffiliate",
                false => "MerchantAccount",
                "Job" => "OriginatingOrder",
                "CProgram" => "Program", -1 => "ShippingOption",
                false => "MerchantAccount",
                "Job" => "OriginatingOrder",
            ) ,
            "StageMove" => array(
                "Lead" => "Opportunity"
            ) ,
            "Ticket" => array(
                "User" => "Dev",
                false => "Issue"
            ) ,
            "TicketType" => array(
                false => "Category"
            ) ,
            "UserGroup" => array(
                "User" => "Owner"
            ) ,
            "Expense" => array(
                false => "Type"
            ) ,
            // "RecurringOrder"=>array("User"=>"Owner"),
            // "Contact"=>array("User"=>"Owner"),
            // "Contact"=>array("User"=>"Owner"),
            // "Contact"=>array("User"=>"Owner"),
            
            
        );
        $tableNames = array();
        //iterate first to build the table names
        foreach ($tablespulled as $table) {
            $tableNames[] = $table->name;
        }
        //iterate through tables then fields
        $tableFKSQL = array();
        foreach ($tablespulled as $table) {
            // echo "<div class=\"row\">";
            foreach ($table->fields as $field) {
                if (($this->right($field->name, 2) == "Id" || $this->right($field->name, 2) == "ID") && $field->name != "Id" && strstr($field->name, '.') === false) {
                    $tableName = $this->left($field->name, strlen($field->name) - 2);
                    $exists = in_array($tableName, $tableNames);
                    if ($exists == false) {
                        if (isset($exceptions[$table->name])) {
                            $exists = array_search($tableName, $exceptions[$table->name]);
                        }
                    } else {
                        $exists = $tableName;
                    }
                    
                    if (strlen($exists) > 2) {
                        $sql = "ALTER TABLE " . $table->name . " \n";
                        $sql.= "ADD INDEX " . $field->name . "_idx ($field->name ASC);\n";
                        $sql.= "\n";
                        $sql.= "ALTER TABLE " . $table->name . " \n";
                        $sql.= "ADD CONSTRAINT " . $field->name . "\n";
                        $sql.= "  FOREIGN KEY (" . $field->name . ")\n";
                        $sql.= "  REFERENCES " . $exists . " (Id)\n";
                        $sql.= "  ON DELETE NO ACTION\n";
                        $sql.= "  ON UPDATE NO ACTION;\n\n";
                         // echo "<div class=\"col-lg-6 col-lg-offset-3\">";
            // echo "<pre class=\"prettyprint lang-sql\">";
                        $tableFKSQL[$table->name][$field->name] = $sql;
                        // echo "</pre>";
                        // echo "</div>";
                        // echo "</div>";
                    } else {
                        //echo "*** $table->name ==> $field->name --> $tableName --> $exists\n";
                        
                    }
                }
            }
        }
        // echo "<pre><code>";
        // print_r($tableFKSQL);
        // echo "</pre></code>";
        return $tableFKSQL;
    }
    // print_r($tableNames);
    
    function left($str, $length)
    {
        return substr($str, 0, $length);
    }
    
    function right($str, $length)
    {
        return substr($str, -$length);
    }
    
    function flush_buffers()
    {
        ob_end_flush();
        // ob_flush();
        flush();
        ob_start();
    }
    
    function debugecho($string)
    {
        if ($GLOBALS['debug']) {
            echo "<pre>" . $string . "</pre>\n";
            $this->flush_buffers();
        }
    }
}
?>