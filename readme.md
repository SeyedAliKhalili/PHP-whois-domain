# Domain Whois Lookup

This PHP script performs a Whois lookup for a given domain name, providing information about the domain's registration details. It can be used in both GUI (web page) and CLI (Command-Line Interface) modes.

## Usage

### Web Page (GUI) Mode

1. Place the script on your web server.

2. Access the script through a web browser by navigating to the script's URL.

3. Enter the domain name in the provided input field and submit the form.

4. The Whois information will be displayed on the web page.

    ```bash
    http://yoursite.com/example.com
    ```


### Command-Line Interface (CLI) Mode

1. Open a terminal or command prompt.

2. Navigate to the directory containing the script.

3. Run the script from the command line by providing the domain name as an argument:

    ```bash
    php whois.php example.com
    ```

4. The Whois information will be displayed in the terminal.

## Note

- The script supports both domain and IP address lookups.


## Dependencies

- PHP>8.0 with fsockopen support.

## Whois Server List

Also, you can use Whois servers listed in [this file](https://www.nirsoft.net/whois-servers.txt).

## Author

The repository was created by [@imseyed](https://github.com/imseyed/PHP-whois-domain) and has been published as an open-source project. 

## License
GNU GENERAL PUBLIC LICENSE
Copyright (C) 2024 - Ali Khalili

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.