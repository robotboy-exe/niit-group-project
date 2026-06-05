# Institutional Management & Learning Platform

A dynamic, user-role-driven educational web platform designed to streamline student admissions, portal management, and administrative workflows. The system implements secured, database-coupled workflows for three distinct user roles: Prospective Students, Current Students, and Administrators.

---

## 🚀 Features & Core Workflows

Based on the system architecture, the following core modules are fully implemented:

### A. Prospective Student & Admissions Funnel
* **Public Information Portal:** Users can land on the platform and browse public-facing institutional details, including available courses and faculty information.
* **Digital Admission Form:** Prospective students can access an integrated application module to input personal and academic records.
* **Automated Profile Generation:** Upon form submission, the server processes the data and dynamically initializes a new, secured student profile record directly inside the database.

### B. Student Dashboard & Core Integration
* **Secure Portal Authentication:** Current students can securely authenticate and log into their personalized user portal.
* **Database Synchronization:** Core user actions—such as accessing learning materials, viewing grades, and editing profile parameters—successfully pull from and update the centralized database.
* **Assignment Submission Pipeline:** Students can view active tasks and upload assignment payloads, which are instantly saved and tied to their unique profile record in the database.

---

## 📊 System Architecture & Flowcharts

The logical routing and state machines for this application were formally designed prior to development. 

* **Overall User Routing Logic:** Documented and mapped out in **user-routing.jpg**.
* **Admin Control Module Architecture:** Documented and mapped out in **admin-module.jpg**.

---

## 🛠️ Tech Stack

* **Backend:** PHP (Server-side form processing, multi-role authentication routing, session handling, and database querying)
* **Frontend:** HTML5, CSS3, JavaScript (Dynamic UI state rendering and responsive layout design)
* **Version Control & Deployment:** Git, GitHub, Netlify

---

## 📌 Project Scope Limitations & Roadmap

To maintain engineering transparency and practice iterative development, certain features mapped out in the original flowcharts (**1000778698.jpg** and **1000766570.jpg**) rely on placeholder implementations in the current build and are scheduled for the next deployment phase:

1. **Static Student Dashboard View:** While data transactions (saving submissions and reading grades) are fully functional on the backend, the corresponding frontend UI elements for the student dashboard currently utilize static components.
2. **Real-Time Notification Core (Blinking Alert):** The visual "BLINKING ALERT" trigger meant to notify students of a new assignment currently operates as a frontend layout placeholder awaiting backend webhook integration.
3. **Deferred Admin Dashboard Modules:** To prioritize the core admissions engine, three administrative panels shown in the architecture are currently deferred:
   * *Manage Students Module* (View/Edit/Delete student profiles)
   * *Website Settings Module* (Global content management & user role editing)
   * *Assign Work Pipeline* (The administrative interface to push assignments to specific classes)

---

## 👥 Contributors & Team Roles

This platform was engineered as a collaborative group project at NIIT. Roles and development modules were divided as follows:

* **Samuel Oghenero Odeyovwi ([@robotboy-exe](https://github.com/robotboy-exe)) – Backend, System Architecture & Frontend Optimization**
  * Designed and mapped out the complete system flowcharts, database schemas, and data routing structures.
  * Engineered the server-side logic using **PHP** for secure user authentication, multi-role access routing, and data processing.
  * Developed the complete digital admissions funnel—including building the frontend admission form interface for prospective students and the backend processing scripts for automated profile generation.
  * Optimized and refactored the platform's codebase to ensure full cross-device responsiveness and fixed core front-end JavaScript functionality.
  * Managed repository version control, environment branching, and deployment workflows.

* **Darlington – Core Frontend Developer**
  * Developed the base HTML5 structural markup and foundational CSS layouts for the platform.
  * Created the initial layout styles, wireframes, and UI components for the student and admin dashboard views.
  * Authored the baseline JavaScript structures for client-side interactions.

---

## ⚙️ Installation & Local Setup

1. Clone the repository to your local machine:
```bash
   git clone [https://github.com/robotboy-exe/niit-group-project.git](https://github.com/robotboy-exe/niit-group-project.git)
