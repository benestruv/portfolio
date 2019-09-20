<?php
/*
 * PUT YOUR CUSTOM QUERIES IN HERE
 */
function get_latest_realisations($amount = 8)
{
    return query()->take($amount)->type('realisation');
}
