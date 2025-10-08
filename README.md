# mental_arithmetic_multiplication_demonstrator




🧮 Two-Digit Multiplication Demonstrator

This project is a PHP-based web demonstrator that shows, step by step, how to multiply two two-digit numbers mentally — exactly the way it’s often taught in school or used for mental arithmetic practice.

The user can enter two 2-digit numbers, and the website displays how the partial products combine to form the full multiplication result.

✨ Features

Interactive form: Users type in two 2-digit numbers (e.g. 18 × 24).

Step-by-step explanation: The script visually breaks down the multiplication into parts:

Units × Units

Tens × Tens

Cross-multiplication terms (Tens×Units + Units×Tens)

Color-coded display:
Different colors are used for each part of the operation (red, blue, orange, violet, brown) to help visualize the intermediate results and carries.

Auto-filled defaults: If no input is given, the default calculation 18 × 24 is shown.

Localized messages: The function t1('TKxx') can be used to display multilingual explanations (e.g., Finnish, English, etc.).

🧠 How It Works

Example:

18x24
 
1		8	x	2		4	=
Multiply the 2 inner numbers and then the outer 2 numbers and add those 2 numbers. The end result will be put into the middle two placeholders.
8	x	2	+	1	x	4	=
2		0			
Then multiply the tens of each number and put it into the left two placeholders.
1	x	2	=			2		_	_		
Afterwards multiply the last digits of each number and put it into the right two placeholders.
8	x	4	=	_		_		3		2	
Now, add these three multiplication results
2		0			
2		3		2	
The end result is:
------------------------------
4		3		2	


Internally, the program splits both numbers into tens and ones digits:

Variable	Meaning
Z1, E1	Tens and ones of the first number
Z2, E2	Tens and ones of the second number

It then calculates:

R1 = Z1×E2 + E1×Z2 — the cross-products

R2 = Z1×Z2 — the tens multiplication

R3 = E1×E2 — the ones multiplication

These results are then separated into tens (V1, V3, V5, etc.) and units (V2, V4, V6) to simulate carry handling.

Finally, all partial results are combined:

  (Z1×Z2)*100 + (Z1×E2 + E1×Z2)*10 + (E1×E2)


The HTML table output uses the color-coded cells to illustrate each intermediate step visually.

🖥️ Example

Input:

18 × 24


Steps shown:

Step	Description	Result
1	Units × Units	8×4 = 32
2	Tens × Tens	1×2 = 2
3	Cross terms	(1×4 + 8×2) = 20
4	Add up with carries	432

So the demonstrator helps users see why 18×24 = 432 and how each part contributes to the total.

🧩 Installation

Copy the PHP file into your web server’s public folder.

Make sure PHP is enabled (tested with PHP 7+).

Open the page in your browser.

Type two numbers (each with 2 digits) and click Submit.

🗂️ File Structure
multiply-demonstrator.php
assets/
   ├── style.css        # optional styling for color-coded table
   └── translations.php # optional file with t1() definitions

🌐 Localization

The program uses a helper function t1('TKxx') for translated text fragments.
You can implement t1() like this:

function t1($key) {
  $translations = [
    'TK15' => 'Result:',
    'TK20' => 'Adding up all parts...',
    'TK22' => 'Cross multiplication step',
    // ...
  ];
  return $translations[$key] ?? $key;
}


This allows you to easily add support for multiple languages.

📘 Educational Use

This project can be used to:

Demonstrate multiplication concepts in the classroom.

Show intermediate steps visually for mental math learners.

Help debug or understand how manual multiplication works algorithmically.

🔧 Future Improvements

Add support for 3-digit numbers

Add animation to show each step dynamically

Use JavaScript for instant updates without reloading

Display textual explanations below each step

📜 License

MIT License — free to use, modify, and distribute.
