🛍️ Online Classifieds Platform
A web application for posting and browsing classified ads with intelligent image processing, user authentication, and a multilingual interface.

⚙️ Tech Stack:

Laravel – Backend framework

Fortify – User authentication

Livewire – Reactive UI components

MySQL – Database

Google Cloud Vision API – Image content analysis (face detection, text recognition)

🔧 Installation & Setup
✅ Requirements:
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


Additional Features:


-Multi-language UI (via Laravel localization)

-Full-text search for ads

-Custom watermarking of uploaded images

-Automatic image cropping (JavaScript/CSS-based)

-AI-based ad moderation via text content


![Screenshot 2025-05-16 120036](https://github.com/user-attachments/assets/d4170a47-1ac0-45d8-ae64-e9dc06f42e9f)


![Screenshot 2025-05-16 120213](https://github.com/user-attachments/assets/10a33e35-a9a4-4633-824d-04783dde380b)

![Screenshot 2025-05-16 112926](https://github.com/user-attachments/assets/d4ac969f-dfb8-4b5b-8fae-d36ddcc7e124)

![Screenshot 2025-05-16 113021](https://github.com/user-attachments/assets/f54613fb-00e9-4bd8-be56-a6e2c9808d3f)



