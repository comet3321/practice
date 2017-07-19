<?php

function h($s){
  return htmlspecialchars($s, ENT-QUOTES, 'UTF-8');
}
