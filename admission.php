<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission Form - Residential Polytechnic Institute</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      margin: 0;
      padding: 0;
    }
    .admission-wrapper {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 30px;
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
    }
    .admission-container {
      flex: 2;
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .eligibility-box {
      flex: 1;
      background: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      line-height: 1.6;
    }
    h2 {
      text-align: center;
      color: #004c97;
      margin-bottom: 20px;
      border-bottom: 3px solid #004c97;
      display: inline-block;
      padding-bottom: 5px;
    }
    h3 {
      color: #004c97;
      margin-bottom: 15px;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      margin-top: 15px;
      font-weight: bold;
      color: #333;
    }
    input, select, textarea {
      margin-top: 8px;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      width: 100%;
    }
    input[type="file"] {
      border: none;
    }
    .checkbox {
      display: flex;
      align-items: flex-start;
      margin-top: 20px;
    }
    .checkbox input {
      margin-right: 10px;
      margin-top: 4px;
    }
    button {
      margin-top: 30px;
      background: #004c97;
      color: #fff;
      padding: 14px;
      font-size: 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #003366;
    }
  </style>
</head>
<body>

  <div class="admission-wrapper">
    <!-- Admission Form -->
    <div class="admission-container">
      <h2>Admission Form</h2>
      <form action="process_admission.php" method="post" enctype="multipart/form-data">

        <label>প্রার্থীর পূর্ণ নাম (Full Name)</label>
        <input type="text" name="full_name" required>

        <label>পিতার নাম (Father's Name)</label>
        <input type="text" name="father_name" required>

        <label>মাতার নাম (Mother's Name)</label>
        <input type="text" name="mother_name" required>

        <label>জন্ম তারিখ (Date of Birth)</label>
        <input type="date" name="dob" required>

        <label>ইমেইল ঠিকানা (Email Address)</label>
        <input type="email" name="email" required>

        <label>অভিভাবকের মোবাইল নম্বর (Guardian's Mobile)</label>
        <input type="text" name="guardian_mobile" required>

        <label>স্থায়ী ঠিকানা (Permanent Address)</label>
        <textarea name="address" rows="3" required></textarea>

        <label>মোবাইল নম্বর (Your Mobile)</label>
        <input type="text" name="mobile" required>

        <label>যে টেকনোলজিতে পড়তে ইচ্ছুক (Preferred Technology)</label>
        <select name="technology" required>
          <option value="">-- কোর্স সিলেক্ট করুন --</option>
          <option value="Computer">Computer Technology</option>
          <option value="Electrical">Electrical Technology</option>
          <option value="Civil">Civil Technology</option>
          <option value="Mechanical">Mechanical Technology</option>
        </select>

        <label>পরীক্ষার নাম (Exam Name)</label>
        <select name="exam" required>
          <option value="">-- সিলেক্ট করুন --</option>
          <option value="SSC">SSC</option>
          <option value="Equivalent">Equivalent</option>
        </select>

        <label>পাশের সন (Passing Year)</label>
        <input type="text" name="passing_year" required>

        <label>বিভাগ (Group)</label>
        <input type="text" name="group" required>

        <label>বোর্ড (Board)</label>
        <input type="text" name="board" required>

        <label>এস এস সি রোল নম্বর (SSC Roll)</label>
        <input type="text" name="roll" required>

        <label>এস এস সি রেজিস্ট্রেশন নম্বর (SSC Registration)</label>
        <input type="text" name="reg" required>

        <label>জিপিএ (GPA)</label>
        <input type="text" name="gpa" required>

        <label>মার্কশীট আপলোড করুন (Upload Marksheet)</label>
        <input type="file" name="marksheet" required>

        <label>ছবি আপলোড করুন (Upload Photo)</label>
        <input type="file" name="photo" required>

        <div class="checkbox">
          <input type="checkbox" name="agreement" required>
          <p>আবেদনকারীর অঙ্গীকারনামা: আমি অঙ্গীকার করছি যে, ভর্তি হওয়ার সুযোগ পেলে আমি অত্র শিক্ষা প্রতিষ্ঠান ও বাংলাদেশ কারিগরি শিক্ষা বোর্ডের যাবতীয় আইনকানুন মেনে চলব এবং কোন অবস্থাতেই আইন বিরোধী কাজে জড়িত হব না।</p>
        </div>

        <button type="submit">Submit Application</button>
      </form>
    </div>

    <!-- Eligibility Section -->
    <div class="eligibility-box">
      <h3>📌 ভর্তি যোগ্যতা (Eligibility)</h3>
      <ul>
        <li>প্রার্থীকে অবশ্যই SSC বা সমমান পরীক্ষায় উত্তীর্ণ হতে হবে।</li>
        <li>ন্যূনতম GPA: <strong>2.50</strong>।</li>
        <li>বিজ্ঞান বিভাগ থেকে উত্তীর্ণ প্রার্থীরা অগ্রাধিকার পাবে।</li>
        <li>বয়স সর্বোচ্চ: <strong>22 বছর</strong>।</li>
        <li>সকল প্রকার সনদপত্র যাচাই সাপেক্ষে ভর্তি চূড়ান্ত হবে।</li>
        <li>প্রবেশের সময় মার্কশীট ও ছবি জমা দিতে হবে।</li>
      </ul>
    </div>
  </div>

</body>
</html>
