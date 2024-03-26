$(function () {
    const officersDropdown = document.querySelector("#officersDropdown");

    if (officersDropdown != null) {
        const choice = new Choices(officersDropdown, {
            shouldSort: false,
        });

        const officer_positions =
            $("#officer_positions").data("officer-positions");

        const executiveOfficers = officer_positions.filter(
            (op) => op.officer_type === "executive"
        );
        const committeeOfficers = officer_positions.filter(
            (op) => op.officer_type === "committee"
        );
        const position = $("#position");

        function createOptionsForPositionDropdown(officer_positions) {
            position.empty();

            const positions = officer_positions.map((op) => {
                return `<option value='${op.id}'>${op.position}</option>`;
            });

            positions.unshift(
                `<option value="" selected disabled>Select Position</option>`
            );

            position.append(positions.join("\n"));
        }

        function loadOfficerPositions() {
            const officerTypeRadioButtons = $('input[name="officer_type"]');

            for (const rb of officerTypeRadioButtons) {
                $(rb).click(function () {
                    const officer_type = $(this).val();

                    if (officer_type === "executive") {
                        createOptionsForPositionDropdown(executiveOfficers);
                    } else if (officer_type === "committee") {
                        createOptionsForPositionDropdown(committeeOfficers);
                    }
                });
            }
        }

        createOptionsForPositionDropdown(executiveOfficers);
        loadOfficerPositions();
    }
});
