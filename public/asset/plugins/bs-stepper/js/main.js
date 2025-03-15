document.addEventListener("DOMContentLoaded", function () {
    // Initialize the stepper
    var stepper1 = new Stepper(document.querySelector("#stepper1"), {
      linear: true,
      animation: true,
    });
  
    // Next button functionality
    document.querySelectorAll(".btn-next").forEach((btn) => {
      btn.addEventListener("click", function () {
        // Find the currently active pane
        const activePane = document.querySelector(".bs-stepper-pane.active");
        const inputs = activePane.querySelectorAll("input, select");
        let isValid = true;
  
        // Validate all inputs in the current step
        inputs.forEach((input) => {
          if (!input.checkValidity()) {
            input.classList.add("is-invalid");
            isValid = false;
          } else {
            input.classList.remove("is-invalid");
          }
        });
  
        // If all inputs are valid, move to the next step
        if (isValid) {
          stepper1.next();
        }
      });
    });
  
    // Previous button functionality
    document.querySelectorAll(".btn-prev").forEach((btn) => {
      btn.addEventListener("click", function () {
        stepper1.previous();
      });
    });
  
    // Clear validation errors on user input
    document.querySelectorAll("input, select").forEach((input) => {
      input.addEventListener("input", function () {
        input.classList.remove("is-invalid");
      });
    });
  });







  document.addEventListener('DOMContentLoaded', function () {
    const stepperElement = document.querySelector('#stepper1');
    const stepper = new Stepper(stepperElement);

    // Attach event listeners to all step triggers (tab buttons)
    const stepTriggers = stepperElement.querySelectorAll('.step-trigger');
    stepTriggers.forEach((trigger, index) => {
        trigger.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default anchor behavior
            stepper.to(index + 1); // Switch to the corresponding step (index + 1 because stepper is 1-based)
        });
    });

    // Next and Previous buttons functionality
    const btnNextList = stepperElement.querySelectorAll('.btn-next');
    const btnPrevList = stepperElement.querySelectorAll('.btn-prev');

    btnNextList.forEach((btn) => {
        btn.addEventListener('click', function () {
            stepper.next();
        });
    });

    btnPrevList.forEach((btn) => {
        btn.addEventListener('click', function () {
            stepper.previous();
        });
    });
});

  