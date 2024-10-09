<?php 


function formattedDate($format,$date){
    return date($format,strtotime($date));
}