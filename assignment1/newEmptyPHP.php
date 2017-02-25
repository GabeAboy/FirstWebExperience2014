/* CSS designed by  Robert Erickson 
to understand the comments like 900px / 960px
   read http://alistapart.com/article/responsive-web-design/
*/
/*****************     main layout section             ************************/
body{
    margin: 36px auto;
    width: 90%;
    background-repeat:no-repeat;
    
    background-image: url("wood.jpg");
}

#page{
    margin: 0 auto 53px;
    width: 93.75%; /* 900px / 960px  */
    border: 1px solid black;
    border-radius: 15px;
}

#main{
    float: left;
    width: 62.8888889%; /* 566px / 900px */
}

#other{
    float: right;
    width: 36.7777778%; /* 331px / 900px */
}

/*****************     header section             *****************************/
header h1 {
    padding: 0.8em 5.33333333%;
    color: white;
    margin-left: 9em;/* 48px / 900px */
}


/*****************     navigation section         *****************************/
nav ol {
    padding-left: 5.33333333%;  /* 48px / 900px */
}
nav ol li{
    display: inline-block;
    list-style-type: none;
    padding-right: 3em;
}


/*****************     article section             ****************************/
/* un comment and see what happens */
/*
article{
    height: 200px;
    overflow: auto;
}
*/

article h1, article p, article table{
    padding: .2em 8.48056537% .2em 8.48056537%; /* 48px / 566px */
}


/*****************     aside section              *****************************/
aside {
    margin: 0 auto;
    width: 69.7885196%; /* 231px / 331px */
}
aside h2, aside p{
    padding: .2em 8.48056537% .2em 8.48056537%; /* 48px / 566px */
}


/*****************     footer section              ****************************/
footer{
    clear: both;
    padding: 0.8em 5.33333333%;  /* 48px / 900px */
}

/*****************     form section                ****************************/
#form article#main{
    float: none;
    margin: auto; /* because of the fixed width this centers the form */
    text-align: left;
    width: 600px; /* not repsonive but fixed */
}

/* need to clear any floats that may exist */
fieldset{
    clear: both; 
    opacity: .01%;
    border-radius: 15px 15px 15px 15px;

}
select#lstMountains{margin-left: 19em;}
/* just pushes content to left side of the box. */
fieldset.contact{
    float: left;
   
}
input#btnSubmit{margin-left: 22em;}

/* when you look at the labels this pushes then next to the input and right
aligns them. Display block means they are each on their own line. */
fieldset.contact label{
    
    text-align: center;
    /* pushes the text to the right where they line up */
        /* the float left above pushes everything back to the left*/
}

fieldset.contact input{
    width: 15em; /* works with above to be the same size for the boxes */
}

fieldset.buttons{
    border: none;
}

fieldset.wrapper {  
    border: 0;
    margin: auto;
}

fieldset.wrapper legend {
    color: whitesmoke;
    font-size: 1.2em;
    font-weight: bold;
    margin-top: 10px;
}

fieldset.wrapperTwo{background-color: cadetblue;
opacity: 0.9;}
fieldset.wrapper > legend {
    /* i only want the first legend ie if it follows the class wrapper */
    font-size: 2em;
    
    
}
fieldset.textarea{background-color: darkslategray;}
fieldset.radio{background-color: darkslategray;
}
label {
    color: white;
    display: block;
    font-size: .9em;
    font-weight: bold;
    text-align: center;
}

/* style the errors in the form so they are visible */
.mistake {
    color: #fff;
    background-color:#800;
    border: thin solid #000;
    font-size: 105%;
}

/* style the list of errors that will show before the form */
#errors ol li{
    color: #ff5555;
}
label.required{padding: 2em;
display: table-caption;
color: white;
}
legend{text-align: center}
fieldset.contact{margin-left: 9em;
        background-color: darkslategray;
}

fieldset{border-style: dashed;}
         
textarea#txtComments{margin-left: 11em;}

.mailMessage{ color: white;}
#errors{font-size: 200%;}


li.activePage{color: cadetblue;}

aside#other p{color: cadetblue;
}
aside#other h2{color:white;
               margin-left: 3em;
}

article#main h1{color: white;}
article#main p{color: cadetblue;}
 footer p{ color: cadetblue;}

 h3{color:white;
 margin-left: 9em;
 }
 .wrapper p{margin-left: 3em;}
 
 select#lstChange{margin-left:19em; }