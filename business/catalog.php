<?php
// Business tier class for reading product catalog information

class Catalog
{
  // Defines product display options
  public static $mProductDisplayOptions = array ('Default',       // 0
                                                 'On Catalog',    // 1
                                                 'On Department', // 2
                                                 'On Both');      // 3  
    // Retrieves all Categories
  public static function GetCategories()
  {
    // Build SQL query
    $sql = 'CALL catalog_get_categories()';

    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
  
      // Retrieves all Categories
  public static function GetSubCategories($categoryId)
  {
    // Build SQL query
    $sql = 'CALL catalog_get_sub_categories(:category_id)';
    
        // Build the parameters array
    $params = array (':category_id' => $categoryId);

    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql, $params);
  }
  
  
  // Retrieves category name
  public static function GetCategoryName($categoryId)
  {
    // Build SQL query
    $sql = 'CALL catalog_get_category_name(:category_id)';

    // Build the parameters array
    $params = array (':category_id' => $categoryId);

    // Execute the query and return the results
    return DatabaseHandler::GetOne($sql, $params);
  }
  
    // Retrieves category name
  public static function GetProductName($productId)
  {
    // Build SQL query
    $sql = 'CALL catalog_get_product_name(:product_id)';

    // Build the parameters array
    $params = array (':product_id' => $productId);

    // Execute the query and return the results
    return DatabaseHandler::GetOne($sql, $params);
  }
  
  
}
?>
