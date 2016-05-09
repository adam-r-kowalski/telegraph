<?php

function hasStringKeys($array) {
  return count(array_filter(array_keys($array), "is_string")) > 0;
}

function parseAttributes($attributes) {
  $str = "";

  // FIX THIS!!!!!! mutation ahead!
  foreach($attributes as $key => $value) {
    if ($key === "class" && gettype($value) === "array")
      $str .= " $key=\"" . implode(" ", $value) . "\"";

    else
      $str .= " $key=\"$value\"";
  }

  return $str;
}

function parseChildren($children) {
  return gettype($children) === "array" ? implode(" ", $children) : $children;
}

function el($name, $attributes = [], $children = "") {
  if (gettype($attributes) === "array" && hasStringKeys($attributes)) {
    return
      "<$name" . parseAttributes($attributes) . ">" .
      parseChildren($children) . "</$name>";
  }

  return "<$name>" . parseChildren($attributes) . "</$name>";
}

function selfClosing($name, $attributes = []) {
  return "<$name" . parseAttributes($attributes) . " />";
}

function address($attributes = [], $children = "") {
  return el("address", $attributes, $children);
}

function article($attributes = [], $children = "") {
  return el("article", $attributes, $children);
}

function footer($attributes = [], $children = "") {
  return el("footer", $attributes, $children);
}

function h1($attributes = [], $children = "") {
  return el("h1", $attributes, $children);
}

function h2($attributes = [], $children = "") {
  return el("h2", $attributes, $children);
}

function h3($attributes = [], $children = "") {
  return el("h3", $attributes, $children);
}


function h4($attributes = [], $children = "") {
  return el("h4", $attributes, $children);
}

function h5($attributes = [], $children = "") {
  return el("h5", $attributes, $children);
}

function h6($attributes = [], $children = "") {
  return el("h6", $attributes, $children);
}

function hgroup($attributes = [], $children = "") {
  return el("hgroup", $attributes, $children);
}

function nav($attributes = [], $children = "") {
  return el("nav", $attributes, $children);
}

function section($attributes = [], $children = "") {
  return el("section", $attributes, $children);
}

function dd($attributes = [], $children = "") {
  return el("dd", $attributes, $children);
}

function div($attributes = [], $children = "") {
  return el("div", $attributes, $children);
}

function dl($attributes = [], $children = "") {
  return el("dl", $attributes, $children);
}

function dt($attributes = [], $children = "") {
  return el("dt", $attributes, $children);
}

function figcaption($attributes = [], $children = "") {
  return el("figcaption", $attributes, $children);
}

function figure($attributes = [], $children = "") {
  return el("figure", $attributes, $children);
}

function li($attributes = [], $children = "") {
  return el("li", $attributes, $children);
}

function main($attributes = [], $children = "") {
  return el("main", $attributes, $children);
}

function ol($attributes = [], $children = "") {
  return el("ol", $attributes, $children);
}

function p($attributes = [], $children = "") {
  return el("p", $attributes, $children);
}

function pre($attributes = [], $children = "") {
  return el("pre", $attributes, $children);
}

function ul($attributes = [], $children = "") {
  return el("ul", $attributes, $children);
}

function a($attributes = [], $children = "") {
  return el("a", $attributes, $children);
}

function abbr($attributes = [], $children = "") {
  return el("abbr", $attributes, $children);
}

function b($attributes = [], $children = "") {
  return el("b", $attributes, $children);
}

function bdi($attributes = [], $children = "") {
  return el("bdi", $attributes, $children);
}

function bdo($attributes = [], $children = "") {
  return el("bdo", $attributes, $children);
}

function cite($attributes = [], $children = "") {
  return el("cite", $attributes, $children);
}

function code($attributes = [], $children = "") {
  return el("code", $attributes, $children);
}

function data($attributes = [], $children = "") {
  return el("data", $attributes, $children);
}

function dfn($attributes = [], $children = "") {
  return el("dfn", $attributes, $children);
}

function em($attributes = [], $children = "") {
  return el("em", $attributes, $children);
}

function i($attributes = [], $children = "") {
  return el("i", $attributes, $children);
}

function kbd($attributes = [], $children = "") {
  return el("kbd", $attributes, $children);
}

function mark($attributes = [], $children = "") {
  return el("mark", $attributes, $children);
}

function q($attributes = [], $children = "") {
  return el("q", $attributes, $children);
}

function rp($attributes = [], $children = "") {
  return el("rp", $attributes, $children);
}

function rt($attributes = [], $children = "") {
  return el("rt", $attributes, $children);
}

function rtc($attributes = [], $children = "") {
  return el("rtc", $attributes, $children);
}

function ruby($attributes = [], $children = "") {
  return el("ruby", $attributes, $children);
}

function s($attributes = [], $children = "") {
  return el("s", $attributes, $children);
}

function samp($attributes = [], $children = "") {
  return el("samp", $attributes, $children);
}

function small($attributes = [], $children = "") {
  return el("small", $attributes, $children);
}

function span($attributes = [], $children = "") {
  return el("span", $attributes, $children);
}

function strong($attributes = [], $children = "") {
  return el("strong", $attributes, $children);
}

function sub($attributes = [], $children = "") {
  return el("sub", $attributes, $children);
}

function sup($attributes = [], $children = "") {
  return el("sup", $attributes, $children);
}

function u($attributes = [], $children = "") {
  return el("u", $attributes, $children);
}

function audio($attributes = [], $children = "") {
  return el("audio", $attributes, $children);
}

function map($attributes = [], $children = "") {
  return el("map", $attributes, $children);
}

function video($attributes = [], $children = "") {
  return el("video", $attributes, $children);
}

function del($attributes = [], $children = "") {
  return el("del", $attributes, $children);
}

function ins($attributes = [], $children = "") {
  return el("ins", $attributes, $children);
}

function caption($attributes = [], $children = "") {
  return el("caption", $attributes, $children);
}

function colgroup($attributes = [], $children = "") {
  return el("colgroup", $attributes, $children);
}

function table($attributes = [], $children = "") {
  return el("table", $attributes, $children);
}

function tbody($attributes = [], $children = "") {
  return el("tbody", $attributes, $children);
}

function td($attributes = [], $children = "") {
  return el("td", $attributes, $children);
}

function tfoot($attributes = [], $children = "") {
  return el("tfoot", $attributes, $children);
}

function th($attributes = [], $children = "") {
  return el("th", $attributes, $children);
}

function thead($attributes = [], $children = "") {
  return el("thead", $attributes, $children);
}

function tr($attributes = [], $children = "") {
  return el("tr", $attributes, $children);
}

function button($attributes = [], $children = "") {
  return el("button", $attributes, $children);
}

function datalist($attributes = [], $children = "") {
  return el("datalist", $attributes, $children);
}

function fieldset($attributes = [], $children = "") {
  return el("fieldset", $attributes, $children);
}

function form($attributes = [], $children = "") {
  return el("form", $attributes, $children);
}

function label($attributes = [], $children = "") {
  return el("label", $attributes, $children);
}

function legend($attributes = [], $children = "") {
  return el("legend", $attributes, $children);
}

function meter($attributes = [], $children = "") {
  return el("meter", $attributes, $children);
}

function optgroup($attributes = [], $children = "") {
  return el("optgroup", $attributes, $children);
}

function option($attributes = [], $children = "") {
  return el("option", $attributes, $children);
}

function output($attributes = [], $children = "") {
  return el("output", $attributes, $children);
}

function progress($attributes = [], $children = "") {
  return el("progress", $attributes, $children);
}

function select($attributes = [], $children = "") {
  return el("select", $attributes, $children);
}

function textarea($attributes = [], $children = "") {
  return el("textarea", $attributes, $children);
}

function details($attributes = [], $children = "") {
  return el("details", $attributes, $children);
}

function dialog($attributes = [], $children = "") {
  return el("dialog", $attributes, $children);
}

function menu($attributes = [], $children = "") {
  return el("menu", $attributes, $children);
}

function menuitem($attributes = [], $children = "") {
  return el("menuitem", $attributes, $children);
}

function summary($attributes = [], $children = "") {
  return el("summary", $attributes, $children);
}

// self closing tags

function area($attributes = []) {
  return selfClosing("area", $attributes);
}

function br($attributes = []) {
  return selfClosing("br", $attributes);
}

function img($attributes = []) {
  return selfClosing("img", $attributes);
}

function col($attributes = []) {
  return selfClosing("col", $attributes);
}

function hr($attributes = []) {
  return selfClosing("hr", $attributes);
}

function input($attributes = []) {
  return selfClosing("input", $attributes);
}

function track($attributes = []) {
  return selfClosing("track", $attributes);
}

function wbr($attributes = []) {
  return selfClosing("wbr", $attributes);
}