/*
*
* @reference http://javascript.about.com/library/bldydrop1.htm
* @author Jefferson Tolentino, x13452702
*
*/
   function setOptions(chosen) {
var selbox = document.myformmc.opttwo;
 
selbox.options.length = 0;
if (chosen == " ") {
  selbox.options[selbox.options.length] = new Option('Select a topic or type in custom question','Type a question');
 
}
if (chosen == "1") {
	selbox.options[selbox.options.length] = new
Option('Geography - Question 1 [Peninsula]','Both Japan and Indonesia are made up of a chain of islands called?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 2 [Vietnam] ','Which of these nations is located closet to the Philippines, Malaysia, and Indonesia?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 3 [Ireland]','In which city would you find phoenix park?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 4 [Belgium]','In which country is the Albert canal?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 5 [Australia 2]','In which country is the Great Sandy Desert?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 6 [England]','In which English county is the Forest of Dean?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 7 [Brazil]','Which city is dominated by Sugar loaf mountain?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 8 [USA]','How many US states have the word new in their name?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 9 [Macao]','What is the island state other than Hong Kong that lies just off the southern coast of China?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 10 [Australia 2]','Which Australian state was formerly known as Van Diemens land?');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 11 [Australia Buildings] ','What has been described as probably Australias best-known building? ');
	selbox.options[selbox.options.length] = new
Option('Geography - Question 12 [Wales]','Which sea is to the north of Wales?');
}
if (chosen == "2") {
  	selbox.options[selbox.options.length] = new
Option('History - Question 1 [Irish History]','In what year was the Easter Rising?');
	selbox.options[selbox.options.length] = new
Option('History - Question 2 [Irish History] ','During which years did the Irish Potato Famine take place?');
	selbox.options[selbox.options.length] = new
Option('History - Question 3 [Irish History]','Where did most people emigrate to after the Famine of the 1840s?');
	selbox.options[selbox.options.length] = new
Option('History - Question 4 [Irish History]','The English Pale surrounded which city?');
	selbox.options[selbox.options.length] = new
Option('History - Question 5 [World War 2]','In which French area were the D-Day landings?');
	selbox.options[selbox.options.length] = new
Option('History - Question 6 [World War 2]','What date is VE-day?');
	selbox.options[selbox.options.length] = new
Option('History - Question 7 [World War 2]','What year did world war 2 begin?');
	selbox.options[selbox.options.length] = new
Option('History - Question 8 [World War 2]','In which two Japanese cities were the first 2 atomic bombs dropped?');
	selbox.options[selbox.options.length] = new
Option('History - Question 9 [Irish History]','Which Scandinavians invaded Ireland in the 9th and 10th centuries?');
	selbox.options[selbox.options.length] = new
Option('History - Question 10 [World War 2]','What event started world war II?');
	selbox.options[selbox.options.length] = new
Option('History - Question 11 [World War 2] ','Who was the leader of the Soviet Union?');
	selbox.options[selbox.options.length] = new
Option('History - Question 12 [World War 2]','What day was Pearl Harbor attacked by the Japanese?');
}
if (chosen == "3") {
  selbox.options[selbox.options.length] = new
Option('third choice - option one','Click Click boom');
  selbox.options[selbox.options.length] = new
Option('third choice - option two','Booom');
}

}

 // Function that sets preset question to the form 
 function setText() {
 document.forms['form1'].elements['myText'].value=(document.myformmc.opttwo.options[document.myformmc.opttwo.selectedIndex].value);

  if (document.forms['form1'].elements['myText'].value=='Type a question'){
   document.forms['form1'].elements['text2'].value='Type a wrong answer';
   document.forms['form1'].elements['text3'].value='Type the right answerer ';
 }  
 
 if (document.forms['form1'].elements['myText'].value=='Both Japan and Indonesia are made up of a chain of islands called?'){
   document.forms['form1'].elements['text1'].value='An archipelago';
   document.forms['form1'].elements['text2'].value='A peninsula';
   document.forms['form1'].elements['text3'].value='A rock';
   document.forms['form1'].elements['text4'].value='A delta';
 }

 if (document.forms['form1'].elements['myText'].value=='Which of these nations is located closet to the Philippines, Malaysia, and Indonesia?'){
   document.forms['form1'].elements['text1'].value='Korea';
   document.forms['form1'].elements['text2'].value='Vietnam';
   document.forms['form1'].elements['text3'].value='China';
   document.forms['form1'].elements['text4'].value='Pakistan';
 }

 if (document.forms['form1'].elements['myText'].value=='In which city would you find phoenix park?'){
   document.forms['form1'].elements['text1'].value='Dublin';
   document.forms['form1'].elements['text2'].value='Sligo';
   document.forms['form1'].elements['text3'].value='Galway';
   document.forms['form1'].elements['text4'].value='Clare';
 }

 if (document.forms['form1'].elements['myText'].value=='In which country is the Albert canal?'){
   document.forms['form1'].elements['text1'].value='Belgium';
   document.forms['form1'].elements['text2'].value='Germany';
   document.forms['form1'].elements['text3'].value='Ireland';
   document.forms['form1'].elements['text4'].value='Australia';
 }

 if (document.forms['form1'].elements['myText'].value=='In which country is the Great Sandy Desert?'){
   document.forms['form1'].elements['text1'].value='Australia';
   document.forms['form1'].elements['text2'].value='Brazil';
   document.forms['form1'].elements['text3'].value='Egypt';
   document.forms['form1'].elements['text4'].value='India';
 } 
 
 if (document.forms['form1'].elements['myText'].value=='In which English county is the Forest of Dean?'){
   document.forms['form1'].elements['text1'].value='Gloucestershire';
   document.forms['form1'].elements['text2'].value='Oxford';
   document.forms['form1'].elements['text3'].value='Shropshire';
   document.forms['form1'].elements['text4'].value='Leicestershire';
 } 
 if (document.forms['form1'].elements['myText'].value=='Which city is dominated by Sugar loaf mountain?'){
   document.forms['form1'].elements['text1'].value='Rio de Janeiro';
   document.forms['form1'].elements['text2'].value='Salvador';
   document.forms['form1'].elements['text3'].value='Cape Town';
   document.forms['form1'].elements['text4'].value='Sydney';
 } 
 if (document.forms['form1'].elements['myText'].value=='Which sea is to the north of Wales?'){
   document.forms['form1'].elements['text1'].value='Irish Sea';
   document.forms['form1'].elements['text2'].value='Black Sea';
   document.forms['form1'].elements['text3'].value='Medditerraen Sea';
   document.forms['form1'].elements['text4'].value='Atlantic';
 } 
 if (document.forms['form1'].elements['myText'].value=='How many US states have the word new in their name?'){
   document.forms['form1'].elements['text1'].value='4';
   document.forms['form1'].elements['text2'].value='7';
   document.forms['form1'].elements['text3'].value='3';
   document.forms['form1'].elements['text4'].value='6';
 } 
 if (document.forms['form1'].elements['myText'].value=='What is the island state other than Hong Kong that lies just off the southern coast of China?'){
   document.forms['form1'].elements['text1'].value='Macao';
   document.forms['form1'].elements['text2'].value='Malaysia';
   document.forms['form1'].elements['text3'].value='Indonesia';
   document.forms['form1'].elements['text4'].value='Sri Lanka';
 } 
 if (document.forms['form1'].elements['myText'].value=='Which Australian state was formerly known as Van Diemens land?'){
   document.forms['form1'].elements['text1'].value='Tasmania';
   document.forms['form1'].elements['text2'].value='Sydney';
   document.forms['form1'].elements['text3'].value='Queensland';
   document.forms['form1'].elements['text4'].value='Perth';
 } 
 if (document.forms['form1'].elements['myText'].value=='What has been described as probably Australias best-known building? '){
   document.forms['form1'].elements['text1'].value='Sydney opera house';
   document.forms['form1'].elements['text2'].value='Eureka Tower';
   document.forms['form1'].elements['text3'].value='Bell Tower';
   document.forms['form1'].elements['text4'].value='MCG';
 } 
 if (document.forms['form1'].elements['myText'].value=='What day was Pearl Harbor attacked by the Japanese?'){
   document.forms['form1'].elements['text1'].value='December 7 1941';
   document.forms['form1'].elements['text2'].value='December 6 1941';
   document.forms['form1'].elements['text3'].value='December 8 1941';
   document.forms['form1'].elements['text4'].value='December 9 1941';
 } 
 if (document.forms['form1'].elements['myText'].value=='Who was the leader of the Soviet Union?'){
   document.forms['form1'].elements['text1'].value='Stalin';
   document.forms['form1'].elements['text2'].value='Hitler';
   document.forms['form1'].elements['text3'].value='Lenin';
   document.forms['form1'].elements['text4'].value='Mussolini';
 } 
 if (document.forms['form1'].elements['myText'].value=='What event started world war II?'){
   document.forms['form1'].elements['text1'].value='Invasion of Poland';
   document.forms['form1'].elements['text2'].value='Pearl Harbor';
   document.forms['form1'].elements['text3'].value='Hiroshima';
   document.forms['form1'].elements['text4'].value='D Day';
 } 
 if (document.forms['form1'].elements['myText'].value=='Which Scandinavians invaded Ireland in the 9th and 10th centuries?'){
   document.forms['form1'].elements['text1'].value='Vikings';
   document.forms['form1'].elements['text2'].value='Pirates';
   document.forms['form1'].elements['text3'].value='Georgians';
   document.forms['form1'].elements['text4'].value='Normans';
 } 
 if (document.forms['form1'].elements['myText'].value=='In which two Japanese cities were the first 2 atomic bombs dropped?'){
   document.forms['form1'].elements['text1'].value='Hiroshima and Nagasaki';
   document.forms['form1'].elements['text2'].value='Tokyo and Kyoto';
   document.forms['form1'].elements['text3'].value='Tokyo and Nagasaki';
   document.forms['form1'].elements['text4'].value='Hiroshima and Kyoto';
 } 
 if (document.forms['form1'].elements['myText'].value=='What year did world war 2 begin?'){
   document.forms['form1'].elements['text1'].value='1938';
   document.forms['form1'].elements['text2'].value='1845';
   document.forms['form1'].elements['text3'].value='1940';
   document.forms['form1'].elements['text4'].value='1950';
 } 
 if (document.forms['form1'].elements['myText'].value=='What date is VE-day?'){
   document.forms['form1'].elements['text1'].value='9th May 1945';
   document.forms['form1'].elements['text2'].value='10th June 1945';
   document.forms['form1'].elements['text3'].value='11th June 1945';
   document.forms['form1'].elements['text4'].value='12th June 1945';
 } 
 if (document.forms['form1'].elements['myText'].value=='In which French area were the D-Day landings?'){
   document.forms['form1'].elements['text1'].value='Normandy ';
   document.forms['form1'].elements['text2'].value='Valkyrie';
   document.forms['form1'].elements['text3'].value='Paris';
   document.forms['form1'].elements['text4'].value='Nice';
 } 
 if (document.forms['form1'].elements['myText'].value=='The English Pale surrounded which city?'){
   document.forms['form1'].elements['text1'].value='Dublin';
   document.forms['form1'].elements['text2'].value='Wicklow';
   document.forms['form1'].elements['text3'].value='Kildare';
   document.forms['form1'].elements['text4'].value='Louth';
 } 
 if (document.forms['form1'].elements['myText'].value=='In what year was the Easter Rising?'){
   document.forms['form1'].elements['text1'].value='April 1916';
   document.forms['form1'].elements['text2'].value='April 1917';
   document.forms['form1'].elements['text3'].value='April 1918';
   document.forms['form1'].elements['text4'].value='April 1919';
 } 
 if (document.forms['form1'].elements['myText'].value=='Where did most people emigrate to after the Famine of the 1840s?'){
   document.forms['form1'].elements['text1'].value='United States of America';
   document.forms['form1'].elements['text2'].value='United Kingdom';
   document.forms['form1'].elements['text3'].value='Australia';
   document.forms['form1'].elements['text4'].value='Germany';
 } 
 if (document.forms['form1'].elements['myText'].value=='During which years did the Irish Potato Famine take place?'){
   document.forms['form1'].elements['text1'].value='1845 - 1849';
   document.forms['form1'].elements['text2'].value='1843 - 1850';
   document.forms['form1'].elements['text3'].value='1845 - 1850';
   document.forms['form1'].elements['text4'].value='1849 - 1850';
 } 
 if (document.forms['form1'].elements['myText'].value==''){
   document.forms['form1'].elements['text2'].value='';
   document.forms['form1'].elements['text3'].value='';
 } 
 if (document.forms['form1'].elements['myText'].value==''){
   document.forms['form1'].elements['text2'].value='';
   document.forms['form1'].elements['text3'].value='';
 } 

 
 }