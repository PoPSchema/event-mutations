<?php
namespace PoP\EventMutations\TypeAPIs;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
interface EventMutationTypeAPIInterface
{
    public function populate(&$event, $post_data);
}
