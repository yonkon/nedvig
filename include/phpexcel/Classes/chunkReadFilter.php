<?php
/**
 * Created by PhpStorm.
 * User: shikon
 * Date: 21.11.14
 * Time: 19:59
 */

class chunkReadFilter implements PHPExcel_Reader_IReadFilter
{
  private $_startRow = 0;
  private $_endRow = 0;

  public function setRows($startRow, $chunkSize) {
    $this->_startRow    = $startRow;
    $this->_endRow      = $startRow + $chunkSize;
  }

  public function readCell($column, $row, $worksheetName = '') {
    gc_collect_cycles();
    if ((($row == 1) || ($row >= $this->_startRow && $row < $this->_endRow)) && in_array($column, range('A', 'K'))) {
      return true;
    }
    return false;
  }
}