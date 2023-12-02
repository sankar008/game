var is_opera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
var is_Edge = navigator.userAgent.indexOf("Edge") > -1;
var is_chrome = !!window.chrome && !is_opera && !is_Edge;
var is_explorer= typeof document !== 'undefined' && !!document.documentMode && !is_Edge;
var is_firefox = typeof window.InstallTrigger !== 'undefined';
var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);	
function urldecode (str) {
  return decodeURIComponent((str + '').replace(/\+/g, '%20'));
}
function convertNumberToWords(amount) {
    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    return words_string +' Only';
}
function PrintTable(id, title = 'Emi Details') {
	var printWindow = window.open('', '', 'height=800,width=800');
	printWindow.document.write('<html><head><title>'+ title +'</title>');
	printWindow.document.write('<style type="text/css">body{font-family: Arial;font-size: 10pt;}table{border: 1px solid #ccc;border-collapse: collapse;}table th{background-color: #F7F7F7;color: #333;font-weight: bold;}table th, table td{padding: 5px;border: 1px solid #ccc;};.print-d-none{display: none;};.image-fit{height: 20px !important;width: 20px !important;};</style>');
	printWindow.document.write('</head>');
	printWindow.document.write('<body>');
	var divContents = document.getElementById(id).innerHTML;
	printWindow.document.write(divContents);
	printWindow.document.write('</body>');
	printWindow.document.write('</html>');
	printWindow.document.close();
	printWindow.print();
}
function getAjaxError(jqXHR, exception) {
	var msg = '';
	if (jqXHR.status === 0) {
		msg = 'Not connect.\n Verify Network.';
	} else if (jqXHR.status == 404) {
		msg = 'Requested page not found. [404]';
	} else if (jqXHR.status == 500) {
		msg = 'Internal Server Error [500].';
	} else if (exception === 'parsererror') {
		msg = 'Requested JSON parse failed.';
	} else if (exception === 'timeout') {
		msg = 'Time out error.';
	} else if (exception === 'abort') {
		msg = 'Ajax request aborted.';
	} else {
		msg = 'Uncaught Error.\n' + jqXHR.responseText;
	}
	return msg;
}
$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });	
$(document).ready(function () {
	toastr.options.escapeHtml = true;
	toastr.options.closeButton = true;
	toastr.options.preventDuplicates = true;
	toastr.options.closeHtml = '<button><i class="icon-off"></i></button>';
	toastr.options.closeMethod = 'fadeOut';
	toastr.options.closeDuration = 500;
	toastr.options.closeEasing = 'swing';
	
	$('input').attr('autocomplete','off');
	if ($('.aadhaar').length) {
		$('.aadhaar').each(function(e) {
			$(this).inputmask({"mask": "9999 9999 9999"});
		});
	}
	
	if ($('.phone_no').length) {
		$('.phone_no').each(function(e) {
			$(this).inputmask({"mask": "999 999 9999"});
		});
	}
	
	if ($('.mobile_number').length) {
		$('.mobile_number').each(function(e) {
			$(this).inputmask({"mask": "999 999 9999"});
		});
	}
	
	if ($('.lazyload').length) {
		$('.lazyload').each(function(e) {
			$(this).lazyload({
				effect : "fadeIn"
			});
		});
	}
	
	if ($('.multyselect').length) {
		$('.multyselect').each(function(e) {
			$(this).select2({
				allowClear: true,
				minimumResultsForSearch: 10,
				multiple: true,
				width: '100%'
			});
		});
	}
	
	if ($('.select2').length) {
		$('.select2').each(function(e) {
			$(this).select2({
				minimumResultsForSearch: 10,
				width: '100%'
			});
		});
	}
			
	jQuery("form").submit(function(e) {
		e.preventDefault();
		var excludes = ['JsValidator', 'ajaxForm', 'ajaxFormSubmit', 'JsValidatorEdit', 'addAddress', 'addRelative', 'addPhoneNumber', 'addDocument', 'addBankDetails', 'addGuarantors'];
		if(jQuery.inArray(e.target.id, excludes) == '-1') {
			if(jQuery.inArray($(e.target).attr('class'), excludes) == '-1') {
				swal({
					title: "Are you sure?",
					text: "Once process, you will not be able to recover this!",
					icon: "warning",
					buttons: true,
					buttons: ["No Cancel", "Yes Please!"],
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						e.currentTarget.submit();
						return true;
					} else {
						toastr.success("Your file is safe!");
						return false;
					}
				});
			}
		}
	});
	
	$(document).on('change', 'input, select, textarea', function (e) {
		if($(this).next(".validation").length) {
			$(this).next(".validation").remove();
		}
	});	
	
	$(document).on('submit', '.ajaxFormSubmit', function(e) {
		e.preventDefault();
		var form = $(this);
		var formData = new FormData(this);
		swal({
			title: "Are you sure?",
			text: "Once process, you will not be able to recover this!",
			icon: "warning",
			buttons: true,
			buttons: ["No Cancel", "Yes Please!"],
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type: form.attr('method'),
					url: form.attr('action'),
					//data: form.serialize(),
					data: formData,
					dataType: 'json',
					contentType: false,
					cache: false,
					processData:false,
					beforeSend: function(){
						$(":submit").attr("disabled", true);
					},
					success: function (resp) {
						if(resp.status) {
							toastr.success(resp.message);
							if(resp.location !== null){
								setTimeout(function(){ window.location.replace(resp.location); }, 3000);
							}
						} else {
							if((resp.message.constructor == Array) || (resp.message.constructor == Object)) {
								$.each(resp.message, function (key, val) {
									if ($(document).find("#"+key).next(".validation").length == 0) {
										$(document).find("#"+key).after('<span class="validation" style="color:red;margin-bottom: 20px;margin-top: 20px;">'+ val['0'] +'</span>');
									}
									else {
										$(document).find("#"+key).find('span.validation').text(val['0']);
									}
									toastr.warning(val['0']);
								});
							}
							else {
								toastr.warning(resp.message);
							}
						}
						$(":submit").removeAttr("disabled");
					},
					error: function (jqXHR, exception) {
						var msg = '';
						if (jqXHR.status === 0) {
							msg = 'Not connect.\n Verify Network.';
						} else if (jqXHR.status == 404) {
							msg = 'Requested page not found. [404]';
						} else if (jqXHR.status == 500) {
							msg = 'Internal Server Error [500].';
						} else if (exception === 'parsererror') {
							msg = 'Requested JSON parse failed.';
						} else if (exception === 'timeout') {
							msg = 'Time out error.';
						} else if (exception === 'abort') {
							msg = 'Ajax request aborted.';
						} else {
							msg = 'Uncaught Error.\n' + jqXHR.responseText;
						}
						toastr.error(msg);
						$(":submit").removeAttr("disabled");
					}
				});
				return true;
			} else {
				toastr.success("Your file is safe!");
				return false;
			}
		});
		return false;
	});
	
	$(document).on('keyup', '.amount', function (e) {
		e.preventDefault();
		let amnt = $(e.target).val().replace(/[^\d]/g, '');
		$(e.target).val(amnt);
		let msgDiv = $(this).parent().find('span.amount-info');
		if(msgDiv.length) {
			msgDiv.html(convertNumberToWords(amnt));
		}
		else {
			$(this).parent().append('<span class="amount-info">'+ convertNumberToWords(amnt) +'</span>');
		}
	});	
	
	$(document).on('keyup', '.phone_no,.mobile_no,.mobile,.number', function (e) {
		e.preventDefault();
		let phone = $(e.target).val().replace(/[^\d]/g, '');
		$(e.target).val(phone);
		
		if (document.getElementById('phone_number_verify')) {
			$(document).find('#phone_number_verify').val('');
		}
	});
		
	$(document).on('change', '.pan_number', function (e) {
		e.preventDefault();
		var txtPANCard = $(e.target).val();
        var lblPANCard = $(this).parent().find('span.pan-number-info');
        var regex = /([A-Z]){5}([0-9]){4}([A-Z]){1}$/;
        if (regex.test(txtPANCard.toUpperCase())) {
			if(lblPANCard.length) {
				lblPANCard.html('');
			}
            return true;
        } else {
            if(lblPANCard.length) {
				lblPANCard.html('Invalid PAN Number');
			}
			else {
				$(this).parent().append('<span class="pan-number-info">Invalid PAN Number</span>');
			}
            return false;
        }
		
	});	
	
	$(document).on('change', '#phone_number', function (e) {
        e.preventDefault();
		console.log($(this).val());
		$(document).find('#phone_number_verify').val('');
    });
});
$(function(){
    var iFrames = $('iframe');
	function iResize() {
		for (var i = 0, j = iFrames.length; i < j; i++) {
			iFrames[i].style.height = iFrames[i].contentWindow.document.body.offsetHeight + 'px';
		}
	}
    if (is_safari || is_opera) { 
		iFrames.load(function(){
           setTimeout(iResize, 0);
		});
		for (var i = 0, j = iFrames.length; i < j; i++) {
    		var iSource = iFrames[i].src;
    		iFrames[i].src = '';
    		iFrames[i].src = iSource;
		}
    } else {
		iFrames.load(function() { 
           this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
		});
    }
});	