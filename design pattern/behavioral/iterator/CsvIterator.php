<?php


class CsvIterator implements Iterator
{

    const ROW_SIZE = 4096;

    protected $filePointer = null;

    protected $currentElement = null;

    protected $rowCounter = null;

    protected $delimiter = null;

    /**
     * CsvIterator constructor.
     * @param $file
     * @param string $delimiter
     * @throws Exception
     */
    public function __construct($file, $delimiter = ',')
    {
        try {
            $this->filePointer = fopen($file, 'r');
            $this->delimiter = $delimiter;
        } catch (\Exception $exception) {
            throw new Exception('The file "' . $file . '" cannot be read.');
        }
    }

    /**
     * This method resets the file pointer.
     */
    public function rewind()
    {
        $this->rowCounter = 0;
        rewind($this->filePointer);
    }

    /**
     * This method returns the current CSV row as a 2-dimensional array.
     */
    public function current(): array
    {
        $this->currentElement = fgetcsv($this->filePointer, self::ROW_SIZE, $this->delimiter);
        $this->rowCounter++;

        return $this->currentElement;
    }

    /**
     * This method returns the current row number.
     */
    public function key(): int
    {
        return $this->rowCounter;
    }

    /**
     * This method checks if the end of file has been reached.
     */
    public function next(): bool
    {
        if (is_resource($this->filePointer)) {
            return !feof($this->filePointer);
        }
        return false;
    }

    /**
     * This method checks if the next row is a valid row.
     */
    public function valid(): bool
    {
        if (!$this->next()) {
            if (is_resource($this->filePointer)) {
                fclose($this->filePointer);
            }
            return false;
        }
        return true;
    }
}
