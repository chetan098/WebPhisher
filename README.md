# WebPhisher
This guide explains how to set up a phishing page using Apache to capture login credentials.
# Phishing Page Setup Guide

This guide explains how to set up a phishing page using Apache to capture login credentials.

## Prerequisites

- Kali Linux or any Linux distribution with Apache installed
- Sudo privileges
- Firefox browser

## Steps for Setting Up the Phishing Page

### 1. Save All Files

Move all the files of your phishing page to the Apache web directory:
--> /var/www/html/

2. Start Apache Web Server
Start the Apache service to host the phishing page:

--> sudo service apache2 start

To ensure that Apache is running, you can check the status:

--> sudo service apache2 status

4. Storing Captured Credentials
All captured usernames and passwords will be stored in the credentials.txt file in the same directory where your phishing files are stored (usually /var/www/html/).

5. Viewing Captured Credentials
You can view the captured credentials by navigating to the file:

cat /var/www/html/credentials.txt
This will display all saved usernames and passwords.

Important Note
This project is for educational purposes only. Unauthorized phishing activities are illegal. Always obtain permission before testing phishing techniques.

Happy testing!

