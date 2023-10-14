// Example starter JavaScript for disabling form submissions if there are invalid fields

'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
const course = document.getElementById('course');
course.addEventListener("change", courseAmount);

function courseAmount() {
    const amount = document.getElementById('amount');
    const mode = document.getElementById('mode');
    const duration = document.getElementById('duration');
    //   If training course if Frontend
    if (course.value == "Frontend Dev" && mode.value == "Onsite") {
        amount.value = "150000";
        duration.value = "24 Weeks";
    } else if (course.value == "Frontend Dev" && mode.value == "Virtual") {
        amount.value = "90000";
        duration.value = "24 Weeks";
    } else if (course.value == "Frontend Dev" && mode.value == "Private") {
        amount.value = "230000";
        duration.value = "24 Weeks";
    }
    //   if training course is backend
    else if (course.value == "Backend Dev" && mode.value == "Onsite") {
        amount.value = "200000";
        duration.value = "24 Weeks";
    } else if (course.value == "Backend Dev" && mode.value == "Virtual") {
        amount.value = "180000";
        duration.value = "24 Weeks";
    } else if (course.value == "Backend Dev" && mode.value == "Private") {
        amount.value = "300000";
        duration.value = "24 Weeks";
    }
    //   if training course is Mobile Apps Developent
    else if (course.value == "Mobile Apps Dev" && mode.value == "Onsite") {
        amount.value = "250000";
        duration.value = "24 Weeks";
    } else if (course.value == "Mobile Apps Dev" && mode.value == "Virtual") {
        amount.value = "230000";
        duration.value = "24 Weeks";
    } else if (course.value == "Mobile Apps Dev" && mode.value == "Private") {
        amount.value = "350000"
        duration.value = "24 Weeks";
    }
    //   if training course is MERN
    else if (course.value == "MERN Stack Dev" && mode.value == "Onsite") {
        amount.value = "250000";
        duration.value = "24 Weeks";
    } else if (course.value == "MERN Stack Dev" && mode.value == "Virtual") {
        amount.value = "230000";
        duration.value = "24 Weeks";
    } else if (course.value == "MERN Stack Dev" && mode.value == "Private") {
        amount.value = "350000"
        duration.value = "24 Weeks";
    }
    //   if training course is full-stall
    else if (course.value == "Full-stack Web Dev" && mode.value == "Onsite") {
        amount.value = "250000";
        duration.value = "24 Weeks";
    } else if (course.value == "Full-stack Web Dev" && mode.value == "Virtual") {
        amount.value = "230000"
        duration.value = "24 Weeks";
    } else if (course.value == "Full-stack Web Dev" && mode.value == "Private") {
        amount.value = "350000"
    }
    //   if training course is PHP full-stack
    else if (course.value == "PHP Stack Dev" && mode.value == "Onsite") {
        amount.value = "250000";
        duration.value = "24 Weeks";
    } else if (course.value == "PHP Stack Dev" && mode.value == "Virtual") {
        amount.value = "230000";
        duration.value = "24 Weeks";
    } else if (course.value == "PHP Stack Dev" && mode.value == "Private") {
        amount.value = "350000";
        duration.value = "24 Weeks";
    }
    //   if training course is data analysis
    else if (course.value == "Data Analysis" && mode.value == "Onsite") {
        amount.value = "150000";
        duration.value = "16 Weeks";
    } else if (course.value == "Data Analysis" && mode.value == "Virtual") {
        amount.value = "900000";
        duration.value = "16 Weeks";
    } else if (course.value == "Data Analysis" && mode.value == "Private") {
        amount.value = "230000";
        duration.value = "16 Weeks";
    }
    //   if training course is cyber security
    else if (course.value == "Cyber-Security" && mode.value == "Onsite") {
        amount.value = "300000";
        duration.value = "20 Weeks";
    } else if (course.value == "Cyber-Security" && mode.value == "Virtual") {
        amount.value = "230000";
        duration.value = "20 Weeks";
    } else if (course.value == "Cyber-Security" && mode.value == "Private") {
        amount.value = "350000";
        duration.value = "20 Weeks";
    }
    //   if training course is UI-UX
    else if (course.value == "Graphic Design UI-UX" && mode.value == "Onsite") {
        amount.value = "150000";
        duration.value = "16 Weeks";
    } else if (course.value == "Graphic Design UI-UX" && mode.value == "Virtual") {
        amount.value = "180000";
        duration.value = "16 Weeks";
    } else if (course.value == "Graphic Design UI-UX" && mode.value == "Private") {
        amount.value = "230000";
        duration.value = "16 Weeks";
    }
    //   if training course is business and entrepreneurship in IT
    else if (course.value == "Business and Entrepreneurship" && mode.value == "Onsite") {
        amount.value = "50000";
        duration.value = "16 Weeks";
    } else if (course.value == "Business and Entrepreneurship" && mode.value == "Virtual") {
        return alert("This programme is currently not slided for virtual. It only takes place in our office location");
    } else if (course.value == "Business and Entrepreneurship" && mode.value == "Private") {
        return alert("This programme is currently not slided for private. It only takes place in our office location");
    }
    //   if training course is certificate in computer
    else if (course.value == "Certificate in Computer" && mode.value == "Onsite") {
        amount.value = "50000";
        duration.value = "8 Weeks";
    } else if (course.value == "Certificate in Computer" && mode.value == "Virtual") {
        amount.value = "45000";
        duration.value = "8 Weeks";
    } else if (course.value == "Certificate in Computer" && mode.value == "Private") {
        amount.value = "90000";
        duration.value = "8 Weeks";
    }

    //    if training course is diploma in data processing
    else if (course.value == "Diploma in Data Processing" && mode.value == "Onsite") {
        amount.value = "55000";
        duration.value = "12 Weeks";
    } else if (course.value == "Diploma in Data Processing" && mode.value == "Virtual") {
        amount.value = "50000";
        duration.value = "12 Weeks";
    } else if (course.value == "Diploma in Data Processing" && mode.value == "Private") {
        amount.value = "95000";
        duration.value = "12 Weeks";
    }
    //    if training course is diploma in sec studies
    else if (course.value == "Diploma in Sec Studies" && mode.value == "Onsite") {
        amount.value = "45000";
        duration.value = "12 Weeks";
    } else if (course.value == "Diploma in Sec Studies" && mode.value == "Virtual") {
        amount.value = "40000";
        duration.value = "12 Weeks";
    } else if (course.value == "Diploma in Sec Studies" && mode.value == "Private") {
        amount.value = "90000";
        duration.value = "12 Weeks";
    }
    //   if training course is video editing
    else if (course.value == "Video Editing" && mode.value == "Onsite") {
        amount.value = "60000";
        duration.value = "4 Weeks";
    } else if (course.value == "Video Editing" && mode.value == "Virtual") {
        amount.value = "50000";
        duration.value = "4 Weeks";
    } else if (course.value == "Video Editing" && mode.value == "Private") {
        amount.value = "100000";
        duration.value = "4 Weeks";
    }
    //   if training course is networking
    else if (course.value == "Networking" && mode.value == "Onsite") {
        amount.value = "75000";
        duration.value = "12 Weeks";
    } else if (course.value == "Networking" && mode.value == "Virtual") {
        return alert("This programme is currently not slided for virtual. It only takes place onsite (in our office location)");
    } else if (course.value == "Networking" && mode.value == "Private") {
        return alert("This programme is currently not slided for private. It only takes place onsite (in our office location)");
    }
    //   if training course is computer engineering
    else if (course.value == "Computer Engineering" && mode.value == "Onsite") {
        amount.value = "100000";
        duration.value = "16 Weeks";
    } else if (course.value == "Computer Engineering" && mode.value == "Virtual") {
        return alert("This programme is currently not slided for virtual. It only takes place onsite (in our office location)")
    } else if (course.value == "Computer Engineering" && mode.value == "Private") {
        return alert("This programme is currently not slided for private. It only takes place onsite (in our office location)")
    } else {
        amount.value = "0.00"
    }


}