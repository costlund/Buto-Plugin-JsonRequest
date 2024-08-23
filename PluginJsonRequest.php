<?php
class PluginJsonRequest{
  public function output($data){
    header('Content-Type: application/json; charset=utf-8');
    exit(json_encode($data));
  }
}