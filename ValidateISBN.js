// Check manual form entry for valid input from user

function CheckManualForm()

{

	var retVal = true;

	var result = true;

	var isbnValue = document.post.isbn.value;

	

	// Check title value

	if (document.post.title.value == '')

	{

		alert('Please enter the Title!');

		retVal =  false;

	}

	

	// Check author value

	if (document.post.author.value == '')

	{

		alert('Please enter the Author!');

		retVal =  false;

	}

	

	// Check department value

	if (document.post.department.value == '')

	{

		alert('Please choose the Department!');

		retVal =  false;

	}

	

	// Check price value

	if (document.post.price.value == '' || document.post.price.value == 0 || isNaN(document.post.price.value))

	{

		alert('Please enter a valid Price!');

		retVal =  false;

	}

	

	// Check isbn value

	if (isbnValue.toLowerCase() != 'not listed')

	{

		// Check ISBN for hyphens or other invalid chars

		result = CheckHyphens(isbnValue);

	}

	

	if (!result) 

	{

		alert(" ISBN " + document.post.isbn.value + " is not a valid entry. \n Please remove all invalid characters.\n\n");

		return result;

	}

	

	// If ISBN is 10 digit or 13 digit

	if (isbnValue.length == 10 || isbnValue.length == 13 || isbnValue.toLowerCase()=='not listed')

	{

		if (isbnValue.length == 10 && isbnValue.toLowerCase()!='not listed')

		{

			result = ValidateISBN10(isbnValue);

			if (result)

				document.post.action = "addbook.php";

		}

			

		if (isbnValue.length == 13)

		{

			result = ValidateISBN13(isbnValue);

			if (result)

				document.post.action = "addbook.php";

		}

			

		if (isbnValue.toLowerCase() == 'not listed')

			result = true;

	}

	else

		result = false;

		

	if (!result) 

	{

		alert(" ISBN " + document.post.isbn.value + " is not a valid textbook. \n Please enter 'Not Listed' or suggest a different ISBN.\n\n");

	}

	

	return  retVal && result;

}



// Check form for valid ISBN input from user

function CheckForm()

{

	var result;

	var isbnValue = document.post.isbn.value;

	

	// Check ISBN for hyphens or other invalid chars

	result = CheckHyphens(isbnValue);

	

	if (!result) 

	{

		alert(" ISBN " + document.post.isbn.value + " is not a valid entry. \n Please remove all invalid characters.\n\n"+" For your information, correct ISBN are 10 or 13 characters long and are generally found on \n the back cover of a textbook by the barcode. ");

		return result;

	}

	

	// If ISBN is 10 digit or 13 digit

	if (isbnValue.length == 10 || isbnValue.length == 13)

	{

		if (isbnValue.length == 10)

			result = ValidateISBN10(isbnValue);

			

		if (isbnValue.length == 13)

			result = ValidateISBN13(isbnValue);				

	}

	else

		result = false;

		

	if (!result) 

	{

		alert(" ISBN " + document.post.isbn.value + " is not a valid textbook. \n Please suggest a different ISBN or manually enter textbook information.\n\n"+" For your information, correct ISBN are 10 or 13 characters long and are generally found on \n the back cover of a textbook by the barcode.  ");

	}

	

	return  result;

}



// Check ISBN for hyphens or other invalid chars

function CheckHyphens(theISBN)

{

	var lenISBN;

	var c;

	

	// Get length of ISBN

	lenISBN = theISBN.length;

	

	// Check ISBN for hyphens or other invalid chars

	for(var i=0; i<lenISBN; i++)

	{

		c = theISBN.substring(i, i+1);

		// Check to see if c is a valid char (0-9,X,x) 

		if(c!='X' && c!='x' && isNaN(c))

		{	

			return false;

		}

	}

	return true;

}



// Validate that the ISBN10 entered is valid

function ValidateISBN10(theISBN)

{

	var i = 0;

	var test = 0;

	var c;

	theISBN = new String(theISBN);



	for (var pos = 0; pos < theISBN.length; pos++)

	{

		//c = theISBN.substr(pos, 1);

		c = theISBN.substring(pos, pos+1);

		

		if (!isNaN(parseInt(c)))

			c -= '0';

		else if (i == 9 && ('X' == c || 'x' == c))

			c = 10;

		else continue;

		test += c * ++i;

		

	}

	return (i == 10 && test % 11 == 0);

}



// Validate that the ISBN13 entered is valid

function ValidateISBN13(theISBN)

{

	var sum = 0;

	var digit;

	theISBN = new String(theISBN);



	for (var pos = 0; pos < theISBN.length; pos++)

	{

		// Get the digit at current position in ISBN

		//digit = theISBN.substr(pos, 1);

		digit = theISBN.substring(pos, pos+1);

		

		// Check to see if position is odd

		if (pos % 2 == 1)

		{

			sum = sum + (3 * digit);

		}

		// Else position is even

		else

		{

			sum = sum + (1 * digit);

		}

		

	}

	

	if (sum % 10 == 0)

		return true;

	else

		return altValidateISBN13(theISBN);

}



// Alternate algorithm for validating an ISBN13 (verifies check digit)

function altValidateISBN13(theISBN)

{

	var sum = 0;

	var digit, comp;

	var check, rem;

	var newISBN;

	theISBN = new String(theISBN);

	

	// Drop the check digit to get 12 digits 

	newISBN = theISBN.substring(0,12);

	

	// Get the original check digit for comparison

	comp = theISBN.substring(12,13);



	// Recalculate check digit

	for (var pos = 0; pos < newISBN.length; pos++)

	{

		// Get the digit at current position in ISBN

		digit = newISBN.substring(pos, pos+1);

		

		// Check to see if digit is a letter (Roman Numeral X)

		if (digit == 'X' || digit == 'x')

			digit = 10;

		

		// Check to see if position is odd

		if (pos % 2 == 1)

		{

			sum = sum + (3 * digit);

		}

		// Else position is even

		else

		{

			sum = sum + (1 * digit);

		}

		

	}

	

	// Divide the sum by the modulus (which is always 10)

	rem = sum % 10;

		

	// Subtract the remainder from 10 to get the check digit

	check = 10 - rem;

	

	// Compare the result of the new calculation to the original check digit

	return comp == check;

}

