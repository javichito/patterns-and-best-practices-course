<?php

// Make CSV parsing work on OSX computers
ini_set("auto_detect_line_endings", true);

class CsvUserProvider implements UserProviderInterface {

  protected $filename;

  public function __construct($filename)
  {
    if ( ! file_exists($filename))
    {
      throw new Exception('File does not exist');
    }

    $this->filename = $filename;
  }

  public function findByUsername($username)
  {
    $user = [
      'id' => '',
      'username' => '',
      'password' => ''
    ];

    $file = fopen($this->filename, 'r');

    while ($row = fgetcsv($file))
    {
      if ($username === $row[1])
      {
        $user['id'] = $row[0];
        $user['username'] = $row[1];
        $user['password'] = $row[2];

        break;
      }
    }

    fclose($file);

    return (object) $user;
  }

}
