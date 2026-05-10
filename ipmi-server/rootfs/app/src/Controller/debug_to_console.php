public function debug_to_console($data)
	{
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

        error_log($output);
    }
 