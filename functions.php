
/**
 * Remove link page/1/ from the first element and prev element
 */
function jjlazo_remove_first_link_paginate($link) {
    if(is_paged()){
        $link= str_replace('page/1/', '', $link);
    }
    return $link;
}
add_filter( 'paginate_links', 'jjlazo_remove_first_link_paginate');
