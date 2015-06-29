$(document).ready(function() {
	var numberTicker2 = new NumberTicker(".number-ticker-2");
	var numberTicker3 = new NumberTicker(".number-ticker-3");
	var numberTicker4 = new NumberTicker(".number-ticker-4");
	var numberTicker5 = new NumberTicker(".number-ticker-5");
	var numberTicker6 = new NumberTicker(".number-ticker-6");
	numberTicker6.iterations = 30;
	numberTicker6.iterationTime = 100;

	$("#demo-1").mouseup(function () {
		numberTicker.start();
	});
	$("#demo-2").mouseup(function () {
		numberTicker2.start();
	});
	$("#demo-3").mouseup(function () {
		numberTicker3.start();
	});
	$("#demo-4").mouseup(function () {
		numberTicker4.start();
	});
	$("#demo-5").mouseup(function () {
		numberTicker5.start();
	});
	$("#demo-6").mouseup(function () {
		numberTicker6.start();
	});
});