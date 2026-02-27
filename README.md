# PHP Algorithmic Problem Solver
A lightweight PHP project that demonstrates server-side input validation, algorithmic problem solving, and asynchronous client-server communication using Fetch API.

This project contains three independent problem solvers:
* 🐜 Marching Ants Simulation
* 🧮 Factor Calculator
* 📊 Erdős-Woods Range Analyzer

Built using:
* PHP (server-side logic)
* Vanilla JavaScript (Fetch API)
* HTML5
* CSS

## 🚀 Features
### 1. Marching Ants Simulation
Simulates two ant colonies moving in opposite directions at war and determines the outcome:
Possible results:
* Red Wins
* Black Wins
* Neither
* M.A.D

Demonstrates:
* String processing
* Conditional logic
* Server-side validation via GET request

### 2. Factor Calculator
Accepts a positive integer and returns an ordered HTML list of all its factors.
Demonstrates:
* Input validation using ctype_digit
* Loop optimization (checking only up to n/2)
* Dynamic ordered list generation (`<ol>`)

### 3. Erdős-Woods Range Analyzer
Given a start and end value (≤100), returns an unordered list of numbers within the range that are not divisible by the prime factors of the endpoints.
Demonstrates:
* Prime factor filtering
* Nested loop logic
* POST request handling
* Dynamic unordered list generation (`<ul>`)


## 🧠 Concepts Demonstrated
* Server-side validation in PHP
* Defensive input checking
* Separation of concerns (HTML/ JS/ PHP)
* Asynchronous fetch requests
* REST-style parameter handling (GET & POST)
* Clean file naming conventions
* Refactoring for maintainability

## 📁 Project Structure
<pre>
marching-ants-and-number-theory/
│
├── a1.html                   # Frontend interface
├── a1.js                     # Client-side Fetch logic
├── marching-ants.php         # Ant simulation logic
├── factor-calculator.php     # Factorization logic
├── erdos-woods.php           # Erdős-Woods analysis
├── me.php                    # Basic info endpoint
└── README.md
</pre>

## ⚙️ How to Run Locally
1. Install XAMPP (or any PHP-enabled local server)
2. Place the project inside: xampp/htdocs/
3. Start Apache
4. Navigate to : http://localhost/your-folder-name/a1.html

## 📌 Design Decisions
* Used `fetch()` instead of traditional form submission to modernize client-server interaction.
* Used `POST` where appropriate to demonstrate correct request semantics.
* Performed strict numeric validation using `ctype_digint before casting.
* Refactored assignment0style filenames into production-style  naming.

## 🔒 Input Validation
Each endpoint:
* Verifies required parameters exist
* Validates numeric constraints
* Handles negative values
* Returns descriptive error messages when invalid

## 🔮 Future Improvements
* Improve UI styling with modern CSS layout
* Add loading indicators for async calls
* Implement error handling with `.catch()`
* Add Docker support for environmnet portability
