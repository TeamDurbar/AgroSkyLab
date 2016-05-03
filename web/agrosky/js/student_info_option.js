// JavaScript Document

//var states = {
//			"AL" :	"Alabama",
//			"AK" :	"Alaska",
//			"AS" :	"American Samoa",
//			"AZ" :	"Arizona",
//			"AR" :	"Arkansas",
//			"CA" :	"California",
//			"CO" :	"Colorado",
//			"CT" :	"Connecticut",
//			"DE" :	"Delaware",
//			"DC" :	"District of Columbia",
//			"FM" :	"Federated States of Micronesia",
//			"FL" :	"Florida",
//			"GA" :	"Georgia",
//			"GU" :	"Guam",
//			"HI" :	"Hawaii",
//			"ID" :	"Idaho",
//			"IL" :	"Illinois",
//			"IN" :	"Indiana",
//			"IA" :	"Iowa",
//			"KS" :	"Kansas",
//			"KY" :	"Kentucky",
//			"LA" :	"Louisiana",
//			"ME" :	"Maine",
//			"MH" :	"Marshall Islands",
//			"MD" :	"Maryland",
//			"MA" :	"Massachusetts",
//			"MI" :	"Michigan",
//			"MN" :	"Minnesota",
//			"MS" :	"Mississippi",
//			"MO" :	"Missouri",
//			"MT" :	"Montana",
//			"NE" :	"Nebraska",
//			"NV" :	"Nevada",
//			"NH" :	"New Hampshire",
//			"NJ" :	"New Jersey",
//			"NM" :	"New Mexico",
//			"NY" :	"New York",
//			"NC" :	"North Carolina",
//			"ND" :	"North Dakota",
//			"MP" :	"Northern Mariana Islands",
//			"OH" :	"Ohio",
//			"OK" :	"Oklahoma",
//			"OR" :	"Oregon",
//			"PW" :	"Palau",
//			"PA" :	"Pennsylvania",
//			"PR" :	"Puerto Rico",
//			"RI" :	"Rhode Island",
//			"SC" :	"South Carolina",
//			"SD" :	"South Dakota",
//			"TN" :	"Tennessee",
//			"TX" :	"Texas",
//			"UT" :	"Utah",
//			"VT" :	"Vermont",
//			"VI" :	"Virgin Islands",
//			"VA" :	"Virginia",
//			"WA" :	"Washington",
//			"WV" :	"West Virginia",
//			"WI" :	"Wisconsin",
//			"WY" :	"Wyoming"
//			};

var gender = {
    "Male": "Male",
    "Female": "Female",
    "Other": "Other"
};
function printGender() {
    for (key in gender) {
        document.write('<option value="' + key + '">' + gender[key] + '</option>');
    }
}
function printGend(staa) {
    for (key in gender) {
        if (staa.match(key)) {
            document.write('<option selected="selected" value="' + key + '">' + gender[key] + '</option>');
        } else {
            document.write('<option value="' + key + '">' + gender[key] + '</option>');
        }
    }
}

var marital = {
    "Married": "Married",
    "Single": "Single"
};
function printMaritalOption() {
    for (key in marital) {
        document.write('<option value="' + key + '">' + marital[key] + '</option>');
    }
}
function printMarital(staa) {
    for (key in marital) {
        if (staa.match(key)) {
            document.write('<option selected="selected" value="' + key + '">' + marital[key] + '</option>');
        } else {
            document.write('<option value="' + key + '">' + marital[key] + '</option>');
        }
    }
}

var BloodGroup = {
    "A+": "A+",
    "B+": "B+",
    "O+": "O+",
    "AB+": "AB+",
    "A-": "A-",
    "B-": "B-",
    "O-": "O-",
    "AB-": "AB-"
};
function printBloodGroupOption() {
    for (key in BloodGroup) {
        document.write('<option value="' + key + '">' + BloodGroup[key] + '</option>');
    }
}
function printBloodGroup(staa) {
    for (key in BloodGroup) {
        if (staa.match(key)) {
            document.write('<option selected="selected" value="' + key + '">' + BloodGroup[key] + '</option>');
        } else {
            document.write('<option value="' + key + '">' + BloodGroup[key] + '</option>');
        }
    }
}
/*function returnBillingStateOptions()
 {	//alert ("topon");
 var code= '<option value=" ">Select a State</option>';
 for(key in states)
 {
 code +='<option value="' + key + '" >' + states[key] + '</option>';
 }
 document.getElementById("customer_state").innerHTML=code;
 }
 
 function returnShippingStateOptions()
 {	alert ("topon");
 var code= '<option value=" ">Select a State</option>';
 for(key in states)
 {
 code +='<option value="' + key + '" >' + states[key] + '</option>';
 }
 document.getElementById("shipping_state").innerHTML=code;
 alert(code);
 }
 */