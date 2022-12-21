<?php
namespace DigitalCollege\Dev\Api;
 
/**
 * @api 
 */
interface ProductLinkManagementInterface
{
    /**
     * Get products assigned to on ID
     *
    * @param int $id
     * @return \DigitalCollege\Dev\Api\Data\CategoryProductLinkInterface[]
     */
    public function getAssignedProductById($id);
}