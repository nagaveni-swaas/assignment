// Calculate Cutoff for Given Marks
// Check Whether he/she is eligible to apply the course

/* Input */
const studentMarks = {
    "maths": 0,
    "physics": 10,
    "chemistry": 15,
    "biology": 20
};
/* Input */


/* Logic Implementation Function */
let cutoff = 0

function calculateCutoff(marksJson) {
    
    /* Write your logic here --- Start */

    const mark1 = marksJson.maths
    const mark2 = marksJson.physics
    const mark3 = marksJson.biology
    const mark4 = marksJson.chemistry

    const total = mark1 + mark2 + mark3 + mark4
    const avg = total / 4
    console.log(avg)
    cutoff = avg
    
    for(var i=0;i<studentMarks.length;i++)
        {
            console.log(cutoff+" ****")
            cutoff +=marksJson[i][1];
            
            cutoff = (cutoff / students.length);
        }
    
    /* Write your logic here --- End */
    console.log('The cutoff is:'+ cutoff);
}
/* Logic Implementation Function */


/* Logic Implementation Function */
const eligibilityCutOff = 75
function checkEligibility(mark){
    /* Write your logic here --- Start */

    // this function should return message like "You are Eligible" or "You are not Eligible"
    if (mark>=75)
        console.log("You are Eligible");
    else 
        console.log("You are not Eligible");

    /* Write your logic here --- End */
}
/* Logic Implementation Function */


/* Function Call */
calculateCutoff(studentMarks);
checkEligibility(cutoff);
/* Function Call */

/* Expected Output */

// The cutoff is: 77.80
// You are Eligible

/* Expected Output */
