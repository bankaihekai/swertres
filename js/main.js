// Adding new table row for transaction
// var addTransactionBtn = document.getElementById('add-transaction-btn');
// var transactionForm = document.getElementById('transaction-form');

// addTransactionBtn.addEventListener('click', function() {
//     if (transactionForm.style.display === 'none') {
//         transactionForm.style.display = 'block';
//         addTransactionBtn.classList.remove('btn-primary');
//         addTransactionBtn.classList.add('btn-danger');
//         addTransactionBtn.textContent = 'Close Transaction';
//     } else {
//         transactionForm.style.display = 'none';
//         addTransactionBtn.classList.remove('btn-danger');
//         addTransactionBtn.classList.add('btn-primary');
//         addTransactionBtn.textContent = 'Add Transaction';
//     }
// });

// new transaction row content
$(document).ready(function() {

    $(document).on('input', 'input[name="number[]"]', function() {
        var value = $(this).val();
        var isValid = /^\d{1,3}$/.test(value);
        $(this).toggleClass('is-invalid', !isValid);
    });

    $(document).on('input', 'input[name="amount[]"]', function() {
        var value = $(this).val();
        var isValid = /^\d{1,3}$/.test(value);
        $(this).toggleClass('is-invalid', !isValid);
        updateTotalAmount();
    });

    // Initial count
    var betCount = 1;

    // Function to update the total bet count
    function updateBetCount() {
        var totalBets = $('.paste-new-forms tr').length + betCount;
        $('#total-bets').html('<b>Total Bets:</b> ' + totalBets);
    }

    // Clicking remove button updates total bet and amount
    $(document).on('click', '.remove-btn', function() {
        $(this).closest('tr').remove();
        updateBetCount(); 
        updateTotalAmount();
    });

    $(document).on('click', '.add-more-form', function() {
        $('.paste-new-forms').append('<tr>\
                                <td>\
                                    <input type="text" name="number[]" class="form-control" required placeholder="000-999" maxlength="3">\
                                </td>\
                                <td>\
                                    <select name="type[]" class="form-control user-inputs" required>\
                                        <option value="Straight">Straight</option>\
                                        <option value="Ramble">Ramble</option>\
                                    </select>\
                                </td>\
                                <td>\
                                    <input type="text" name="amount[]" class="form-control" required placeholder="&#8369; 0.0">\
                                </td>\
                                <td class="d-flex justify-content-center">\
                                    <button type="button" class="remove-btn btn btn-danger"><i class="fas fa-trash"></i></button>\
                                </td>\
                            </tr>');
        updateBetCount();
    });

    function updateTotalAmount() {
        var totalAmount = 0;
        $('input[name="amount[]"]').each(function() {
            var amountValue = parseFloat($(this).val().replace(/[^\d.-]/g, ''));
            if (!isNaN(amountValue)) {
                totalAmount += amountValue;
            }
        });
        $('#total-amount').val(totalAmount.toFixed(2));
    }

    $(document).on('input', 'input[name="amount[]"]', function() {
        var value = $(this).val();
        var isValid = /^\d{1,3}$/.test(value);
        $(this).toggleClass('is-invalid', !isValid);
        updateTotalAmount();
    });

    // // Rambled numbers
    // $(document).on('change', 'select[name="type[]"]', function() {
    //     var selectedType = $(this).val();
    //     if (selectedType === 'Ramble') {
    //         var numberInput = $(this).closest('tr').find('input[name="number[]"]');
    //         var numberValue = numberInput.val();
    //         var rambledNumbers = getRambledNumbers(numberValue);
    //         console.log('Rambled Numbers:', rambledNumbers);
    //     }
    // });

    // // Recursive function to generate rambled numbers
    // function getRambledNumbers(number) {
    //     if (number.length === 1) {
    //         return [number];
    //     }

    //     var rambledNumbers = [];
    //     for (var i = 0; i < number.length; i++) {
    //         var digit = number[i];
    //         var remainingNumber = number.slice(0, i) + number.slice(i + 1);
    //         var subRambledNumbers = getRambledNumbers(remainingNumber);
    //         for (var j = 0; j < subRambledNumbers.length; j++) {
    //             rambledNumbers.push(digit + subRambledNumbers[j]);
    //         }
    //     }

    //     return rambledNumbers;
    // }

});
