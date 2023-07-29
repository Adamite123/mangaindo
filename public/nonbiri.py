# Import the required libraries
import requests
from bs4 import BeautifulSoup
import sys

# Get the URL from the command-line argument
url = sys.argv[1]

try:
    # Make a GET request to the website
    response = requests.get(url)

    # Check if the request was successful (status code 200)
    if response.status_code == 200:
        # Parse the HTML content using BeautifulSoup
        soup = BeautifulSoup(response.text, 'html.parser')
        print(soup)
        # Find all the div elements with class "separator"
        # separator_divs = soup.find_all('div', class_='separator')

        # # Initialize an empty list to store the image URLs
        # image_urls = []

        # for div in separator_divs:
        #     # Find all the 'img' tags with 'src' attribute inside the separator_div
        #     images = div.find_all('img', src=True)

        #     # Get the image URLs and append them to the list
        #     image_urls.extend([img['src'] for img in images])

        # # Return the list of image URLs as a comma-separated string
        # print(','.join(image_urls))
    else:
        # If the request failed, print an error message
        print(f"Error: Failed to fetch data from {url}")

except requests.exceptions.RequestException as e:
    # Handle any request-related errors
    print(f"Error: {e}")
