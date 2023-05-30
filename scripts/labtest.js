$(document).ready(function () {
    const testModal = new bootstrap.Modal(document.getElementById("test-modal"))
    const testType = document.getElementById("test-type")
    const testRate = document.getElementById("test-rate")

    function docLoader() {
        const bookingSlotContainer = document.querySelector(".booking-slots")
        let output = ""

        data.forEach((element) => {
            output += `
            <div class="slot-box">
                <div class="type">
                    <h3>${element.title}</h3>
                </div>
                <div class="slot-btn"><button type="button" class="btn btn-primary book-slot" data-type="${element.type}" data-type-rate="${element.rate}">Book Slot</button></div>
            </div>`
        })

        bookingSlotContainer.innerHTML = output
    }

    docLoader()

    $(".book-slot").on("click", function (e) {
        let dataType = $(this).attr("data-type")
        let dataRate = $(this).attr("data-type-rate")

        testType.value = dataType
        testRate.value = dataRate

        testModal.show()
    })
})
