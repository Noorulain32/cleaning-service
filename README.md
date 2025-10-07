# cleaning-service
# 🧹 Cleaning Service — Laravel Single Page Website

A modern, responsive single-page web application built with **Laravel** and **Bootstrap**, inspired by a professional cleaning company design on Figma.  
This project demonstrates clean code structure, Blade templating, reusable layouts, and section-based page building.

---

## 🌐 Live Preview
(https://postgrippal-unguessable-myra.ngrok-free.dev/)


## 📸 Project Preview
| Hero Section | Services Grid | Satisfaction Section |
|:-------------:|:--------------:|:--------------------:|
| ![Hero](public/images/hero-preview.jpg) | ![Services](public/images/services-preview.jpg) | ![Satisfaction](public/images/satisfaction-preview.jpg) |

*(Replace the screenshots above with your actual images — they make your repo look professional.)*

---

## 🚀 Features
✅ Responsive layout with Bootstrap 5  
✅ Laravel Blade templates with reusable components (`layouts/app.blade.php`)  
✅ Dynamic services grid loaded via PHP array  
✅ Modal contact form with toast notification  
✅ Three-section satisfaction banner (Special Offer, Quick Service, Why Wait)  
✅ Multi-column footer with quick links, services, and contact info  
✅ Optimized for performance — lazy loaded images & WebP support  

---

## 🧰 Tech Stack
| Technology | Purpose |
|-------------|----------|
| **Laravel 10+** | PHP Framework |
| **Bootstrap 5** | Front-end styling |
| **Blade Templates** | Reusable view components |
| **Composer** | PHP dependency manager |
| **Git & GitHub** | Version control and code hosting |

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/Noorulain32/cleaning-service.git
cd cleaning-service
cleaning-service/
│
├── public/
│   ├── css/style.css           # Custom styles
│   └── images/                 # Images & WebP assets
│
├── resources/
│   └── views/
│       ├── layouts/app.blade.php     # Main layout
│       ├── partials/header.blade.php # Navbar + modal
│       ├── partials/footer.blade.php # Footer section
│       └── service.blade.php         # Main page
│
├── routes/web.php               # Routes definitions
└── README.md                    # Project documentation

