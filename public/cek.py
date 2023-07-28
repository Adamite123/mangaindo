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

        # Find all the 'img' tags with 'src' attribute
        images = soup.find_all('img', src=True)

        # Count the number of image URLs
        num_images = len(images)

        # Return the status as true if there are more than 10 image URLs, and false otherwise
        status = True if num_images > 10 else False

        # Initialize an empty list to store the cleaned image URLs
        cleaned_image_urls = []

        # Loop through the image URLs and remove variations of "https://" and "http://"
        for img in images:
            img_url = img['src']
            img_url = img_url.replace('https://www.', '').replace('https://', '').replace('http://www.', '').replace('http://', '').replace('//', '')
            cleaned_image_urls.append(img_url)

        # Return the status and the first image URL (if available)
        if len(cleaned_image_urls) > 0:
            index = num_images // 2
            print(f"{status}, {cleaned_image_urls[index]}")
        else:
            print(f"{status}, No image URL found")
    else:
        # If the request failed, print an error message
        print(f"Error: Failed to fetch data from {url}")

except requests.exceptions.RequestException as e:
    # Handle any request-related errors
    print(f"Error: {e}")
