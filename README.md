# 📊 Decision Support System (SPPK) using MAUT Method - Back End

This repository is a *forked* project focusing on the development of the back-end architecture and algorithmic logic for a web-based Decision Support System (DSS / SPPK). It operates as a pure on-the-fly calculation engine that processes user inputs and uploaded documents without requiring persistent database storage.

## 🛠️ Back-End Tech Stack
- **Server-Side Language:** PHP
- **PDF Processing:** [Mention your PHP PDF library here if applicable, e.g., FPDF / TCPDF / Smalot PdfParser] (For handling and parsing document uploads)

## ⚙️ Core Back-End Features & Architecture
As the *Back-End Developer*, I was fully responsible for implementing the complete data processing pipeline and mathematical calculation logic:

1. **Document Upload & On-the-Fly Parsing:**
   - Developed server-side file upload handling to process PDF documents securely.
   - [Optional: if your code reads PDF text] Integrated a parser engine to extract criteria data directly from uploaded PDFs in real-time.

2. **Dynamic Criteria & Weight Processing:**
   - Implemented array-based and object-oriented data structures to handle user-submitted criteria, sub-criteria, and preference weights directly from the frontend request.

3. **Core MAUT (Multi-Attribute Utility Theory) Calculation Engine:**
   - **Matrix Normalization:** Implemented mathematical functions to transform raw evaluation data into utility values ($U(x)$) based on the minimum ($x^-$) and maximum ($x^+$) thresholds determined from the input.
   - **Utility Function Evaluation:** Programmed backend logic to evaluate utilities dynamically, handling both *benefit* (higher is better) and *cost* (lower is better) criteria attributes.
   - **Final Weight Multiplication:** Multiplied utility scores by their respective criterion weights to compute the total global utility for each alternative.
   - **Automated Ranking System:** Structured a sorting algorithm to automatically rank the alternatives from highest to lowest, sending the final decision recommendations back to the user instantly.

## 🚀 Local Installation & Setup
1. *Clone* or download this forked repository into your local web server directory (e.g., `htdocs` for XAMPP or `www` for Laragon).
2. Start your local server engine (Apache). *Note: No database setup or configuration is required.*
3. Open your browser and access the application via `http://localhost/your-project-folder-name`.

## Screenshot
- Home Page
![Home Page](images/tampilanAwal.png)

- Upload Criteria and Input Page
![Input Page](images/inputKriteria&File.png)

- Evaluating and Ranking Page
![Results Page](images/hasilPerhitungan.png)
