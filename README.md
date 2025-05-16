🛍️ Online Classifieds Platform
A web application for posting and browsing classified ads with intelligent image processing, user authentication, and a multilingual interface.

⚙️ Tech Stack
Laravel – Backend framework

Fortify – User authentication

Livewire – Reactive UI components

MySQL – Database

Google Cloud Vision API – Image content analysis (face detection, text recognition)

🔧 Installation & Setup
✅ Requirements
PHP >= 8.1

Composer

Node.js + NPM

MySQL

Laravel CLI

Google Cloud Platform account with Vision API enabled

1. Clone the Repository

git clone https://github.com/aitsu01/Online-Classifieds--Platform.git
cd /Online-Classifieds--Platform

2. Install Laravel Backend Dependencies

composer install
cp .env.example .env
php artisan key:generate

Edit .env to configure:

APP_NAME="YourProject"
APP_URL=http://localhost:8000

DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

3. Run Database Migrations

   php artisan migrate


4. Frontend Assets
npm install
npm run dev


 5. Fortify Setup (Auth)
Already included if you're using this repo.

If not yet installed:
composer require laravel/fortify
php artisan vendor:publish --provider="Laravel\\Fortify\\FortifyServiceProvider"

6. Livewire Integration
Already installed in this project.


7. Google Cloud Vision API Setup
   Google_credential.json  ---->be sure to have this file in your folder's project and with your real credentials,dont upload on github or other workspake use gitgnore

   composer require google/cloud-vision -w



Common Artisan Commands:


Start the development server:
# php artisan serve



Compile frontend assets (Livewire, Tailwind, etc.):
# npm run dev

Run background job workers 
#php artisan queue:work


Additional Features
-Multi-language UI (via Laravel localization)

-Full-text search for ads

-Custom watermarking of uploaded images

-Automatic image cropping (JavaScript/CSS-based)

-AI-based ad moderation via text content





![Screenshot 2025-05-16 112926](https://github.com/user-attachments/assets/2dbb0e7a-ad06-4eb8-8aaf-bd8dbe4d5009)



![Screenshot 2025-05-16 113021](https://github.com/user-attachments/assets/09d03977-909e-4c2f-9431-bf5bcb1a54e6)



    

![Screenshot 2025-05-16 120036](https://github.com/user-attachments/assets/dd9bd61b-776a-4c46-b8b9-3e5a2fcb3708)




![Screenshot 2025-05-16 120036](https://github.com/user-attachments/assets/e3b1710b-7f86-4d32-92c4-d7fdd527c9e8)



![Screenshot 2025-05-16 120213](https://github.com/user-attachments/assets/9e47a1fa-c719-4a14-98a6-19390c131cac)
