markdown
# PHP JSON Cleaning Project

This PHP project is designed to make a GET request to a specified API endpoint, receive a JSON response, and clean the data based on certain rules. The cleaning process involves removing keys with values of "N/A," "-", or empty strings. If any of these values are found within an array, the corresponding item is removed. The modified JSON object is then logged as a string.

## Usage

1. **Clone the Repository:**
   bash
   git clone https://github.com/azi7/cURL
   

2. **Navigate to the Project Directory:**
   bash
   cd php-json-cleaning
   

3. **Run the PHP Script:**
   bash
   php json_cleaning.php
   

   Ensure that PHP and cURL are installed on your system.

4. **View the Modified JSON:**
   The cleaned JSON object will be displayed in the console.

## Example

### Input
json
{"name": {"first": "Daniel", "middle": "N/A", "last": "smith"}, "age": 45}


### Output
json
{"name": {"first": "Daniel", "last": "smith"}, "age": 45}


## Dependencies

- PHP (>= 7.0)
- cURL extension for PHP

