<?php

function conversion($file, $conversion) {
    return 'media/'.$conversion.'/'.$file->id.'/'.$file->name;
}

function media($file) {
    return 'media/'.$file->id.'/'.$file->name;
}

function mediaUrl($file) {
    return 'media/url/'.$file->id.'/'.$file->name;
}
