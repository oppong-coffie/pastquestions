<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".././css/cpp_practice.css">
</head>
<body>
<div class="app-main__inner">

    <p class="text-xl font-bold text-center text-black">
    C++ Programming MCQ (Multiple Choice Questions)
    </p>
   
    <div class="">
        <div class="question">1. Who invented C++?</div>
        <div class="option">a) Dennis Ritchie</div>
        <div class="option">b) Ken Thompson</div>
        <div class="option">c) Brian Kernighan</div>
        <div class="option">d) Bjarne Stroustrup</div>
        <button class='view' data-target='answer1'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer1" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span> Bjarne Stroustrup is the original creator of C++ in 1979 at AT&T Bell Labs.</div>
        </div>
    </div>
    
    <div class="">
        <p></p>
        <div class="question">2. What is C++?</div>
        <div class="option">a) C++ is an object oriented programming language</div>
        <div class="option">b) C++ is a procedural programming language</div>
        <div class="option">c) C++ supports both procedural and object oriented programming language</div>
        <div class="option">d) C++ is a functional programming language</div>
        <button class='view' data-target='answer2'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer2" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>C++ supports both procedural(step by step instruction) and object oriented programming (using the concept of classes and objects).</div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">3. Which of the following is used for comments in C++?</div>
        <div class="option">a) /* comment */</div>
        <div class="option">b) // comment */</div>
        <div class="option">c) // comment</div>
        <div class="option">d) both // comment or /* comment */</div>
        <button class='view' data-target='answer3'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer3" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>Single line comments are represented as // double forward slash, A multi-line comment can occupy many lines of code, it starts with /* and ends with */
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">4. Which of the following user-defined header file extension used in c++?</div>
        <div class="option">a) hg</div>
        <div class="option">b) cpp</div>
        <div class="option">c) h</div>
        <div class="option">d) hf</div>
        <button class='view' data-target='answer4'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer4" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>.h extensions are used for user defined header files. To include a user defined header file one should use #include”name.h” i.e. enclosed within double quotes.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">5. Which of the following is a correct identifier in C++?</div>
        <div class="option">a) VAR_1234</div>
        <div class="option">b) $var_name</div>
        <div class="option">c) 7VARNAME</div>
        <div class="option">d) 7var_name</div>
        <button class='view' data-target='answer5'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer5" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>Explanation: The rules for writing an identifier is as follows: <br>
i) may contain lowercase/uppercase letters, digits or underscore(_) only <br>
ii) should start with a non-digit character <br>
iii) should not contain any special characters like @, $, etc.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">6. Which of the following is not a type of Constructor in C++?</div>
        <div class="option">a) Default constructor</div>
        <div class="option">b) Parameterized constructor</div>
        <div class="option">c) Copy constructor</div>
        <div class="option">d) Friend constructor</div>
        <button class='view' data-target='answer6'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer6" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>Friend function is not a constructor whereas others are a type of constructor used for object initialization.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">7. Which of the following approach is used by C++?</div>
        <div class="option">a) Left-right</div>
        <div class="option">b) Right-left</div>
        <div class="option">c) Bottom-up</div>
        <div class="option">d) Top-down</div>
        <button class='view' data-target='answer7'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer7" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>C++ is an object-oriented language and OOL uses a bottom-up approach to solve/view a problem.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">8. What is virtual inheritance in C++?</div>
        <div class="option">a) C++ technique to enhance multiple inheritance</div>
        <div class="option">b) C++ technique to ensure that a private member of the base class can be accessed somehow</div>
        <div class="option">c) C++ technique to avoid multiple inheritances of classes</div>
        <div class="option">d) C++ technique to avoid multiple copies of the base class into children/derived class</div>
        <button class='view' data-target='answer8'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer8" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span> Virtual inheritance is a C++ technique with which it ensures that a derived class contains only one copy of the base class’s variables. Refer Wikipedia for more info.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">9. What happens if the following C++ statement is compiled and executed? <br>
        int *ptr = NULL;<br>
        delete ptr;
        </div>
        <div class="option">a) The program is not semantically correct</div>
        <div class="option">b) The program is compiled and executed successfully</div>
        <div class="option">c) The program gives a compile-time error</div>
        <div class="option">d) The program compiled successfully but throws an error during run-time</div>
        <button class='view' data-target='answer9'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer9" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>The above statement is syntactically and semantically correct as C++ allows the programmer to delete a NULL pointer, therefore, the program is compiled and executed successfully.

            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">10. What is the difference between delete and delete[] in C++?
        </div>
        <div class="option">a) delete is syntactically correct but delete[] is wrong and hence will give an error if used in any case</div>
        <div class="option">b) delete is used to delete normal objects whereas delete[] is used to pointer objects</div>
        <div class="option">c) delete is a keyword whereas delete[] is an identifier</div>
        <div class="option">d) delete is used to delete single object whereas delete[] is used to multiple(array/pointer of) objects</div>
        <button class='view' data-target='answer10'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer10" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>delete is used to delete a single object initiated using new keyword whereas delete[] is used to delete a group of objects initiated with the new operator.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        11. Which of the following is correct about this pointer in C++?
        </div>
        <div class="option">
        a) this pointer is passed as a hidden argument in all static variables of a class
        </div>
        <div class="option">b) this pointer is passed as a hidden argument in all the functions of a class</div>
        <div class="option">c) this pointer is passed as a hidden argument in all non-static functions of a class</div>
        <div class="option">
        d) this pointer is passed as a hidden argument in all static functions of a class
        </div>
        <button class='view' data-target='answer11'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer11" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: As static functions are a type of global function for a class so all the object shares the common instance of that static function whereas all the objects have there own instance for non-static functions and hence they are passed as a hidden argument in all the non-static members but not in static members.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        12. Which of the following type is provided by C++ but not C?
        </div>
        <div class="option">
        a) double
        </div>
        <div class="option">
        b) float
        </div>
        <div class="option">
        c) int
        </div>
        <div class="option">
        d) bool
        </div>
        <button class='view' data-target='answer12'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer12" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: C++ provides the boolean type to handle true and false values whereas no such type is provided in C.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        13. By default, all the files in C++ are opened in _________ mode.
        </div>
        <div class="option">
        a) Binary
        </div>
        <div class="option">
        b) VTC
        </div>
        <div class="option">
        c) Text
        </div>
        <div class="option">
        d) ISCII
        </div>
        <button class='view' data-target='answer13'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer13" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: By default, all the files in C++ are opened in text mode. They read the file as normal text.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        14. Which of the following correctly declares an array in C++?
        </div>
        <div class="option">
        a) array{10};
        </div>
        <div class="option">
        b) array array[10];
        </div>
        <div class="option">
        c) int array;
        </div>
        <div class="option">
        d) int array[10];
        </div>
        <button class='view' data-target='answer14'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer14" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: Because array variable and values need to be declared after the datatype only.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        15. What will be the output of the following C++ function?<br>
        int main()<br>
    {<br>
        register int i = 1;<br>
        int *ptr = &i;<br>
        cout << *ptr;<br>
	return 0;<br>
    }
</div>
        <div class="option">
        a) Runtime error may be possible
        </div>
        <div class="option">
        b) Compiler error may be possible
        </div>
        <div class="option">
        c) 1
        </div>
        <div class="option">
        d) 0
        </div>
        <button class='view' data-target='answer15'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer15" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: Using & on a register variable may be invalid, since the compiler may store the variable in a register, and finding the address of it is illegal.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        16. What is the size of wchar_t in C++?
        </div>
        <div class="option">
        a) Based on the number of bits in the system
        </div>
        <div class="option">
        b) 2 or 4
        </div>
        <div class="option">
        c) 4
        </div>
        <div class="option">
        d) 2
        </div>
        <button class='view' data-target='answer16'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer16" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: Compiler wants to make CPU as more efficient in accessing the next value.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        17. What is the use of the indentation in c++?        
        </div>
        <div class="option">
        a) r distinguishes between comments and inner data
        </div>
        <div class="option">
        b) distinguishes between comments and outer data
        </div>
        <div class="option">
        c) distinguishes between comments and code
        </div>
        <div class="option">
        d) r distinguishes between comments and outer data
        </div>
        <button class='view' data-target='answer17'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer17" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             To distinguish between different parts of the program like comments, codes, etc.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        18. Which is more effective while calling the C++ functions?
        </div>
        <div class="option">
        a) call by object
        </div>
        <div class="option">
        b) call by pointer
        </div>
        <div class="option">
        c) call by value
        </div>
        <div class="option">
        d) call by reference
        </div>
        <button class='view' data-target='answer18'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer18" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: In the call by reference, it will just passes the reference of the memory addresses of passed values rather than copying the value to new memories which reduces the overall time and memory use.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        19. Which of the following is used to terminate the function declaration in C++?
        </div>
        <div class="option">
        a) ;
        </div>
        <div class="option">
        b) ]
        </div>
        <div class="option">
        c) )
        </div>
        <div class="option">
        d) :
        </div>
        <button class='view' data-target='answer19'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer19" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: ; semicolon is used to terminate a function declaration statement in C++.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        20. Which keyword is used to define the macros in c++?        
        </div>
        <div class="option">
        a) #macro
        </div>
        <div class="option">
        b) #define
        </div>
        <div class="option">
        c) macro
        </div>
        <div class="option">
        d) define
        </div>
        <button class='view' data-target='answer20'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer20" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: #define is the keyword that is used to define the macros in c++.
            </div>
        </div>
    </div>
    <div class="">
        <p></p>
        <div class="question">
        21. What is the correct syntax of accessing a static member of class in C++?<br>
        ---------------------------<br>
        Example class:<br>
        class A<br>
        {<br>
            public:<br>
                static int value;<br>
        }<br>
        ---------------------------
        </div>
        <div class="option">
        a) A->value
        </div>
        <div class="option">
        b) A^value
        </div>
        <div class="option">
        c) A.value
        </div>
        <div class="option">
        d) A::value
        </div>
        <button class='view' data-target='answer21'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer21" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: Scope resolution operator(::) is used to access a static member of a class.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        22. The C++ code which causes abnormal termination/behaviour of a program should be written under _________ block.
        </div>
        <div class="option">
        a) catch
        </div>
        <div class="option">
        b) throw
        </div>
        <div class="option">
        c) try
        </div>
        <div class="option">
        d) finally
        </div>
        <button class='view' data-target='answer22'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer22" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Code that leads to the abnormal termination of the program should be written under the try block.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        23. What is Inheritance in C++?
        </div>
        <div class="option">
        a) Deriving new classes from existing classes
        </div>
        <div class="option">
        b) Overloading of classes
        </div>
        <div class="option">
        c) Classes with same names
        </div>
        <div class="option">
        d) Wrapping of data into a single class
        </div>
        <button class='view' data-target='answer23'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer23" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: Inheritance is the concept of OOPs in which new classes are derived from existing classes in order to reuse the properties of classes defined earlier.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        24. Which of the following symbol is used to declare the preprocessor directives in C++?
        </div>
        <div class="option">
        a) $
        </div>
        <div class="option">
        b) ^
        </div>
        <div class="option">
        c) #
        </div>
        <div class="option">
        d) *
        </div>
        <button class='view' data-target='answer24'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer24" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            # symbol is used to declare the preprocessor directives.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        25. What is meant by a polymorphism in C++?
        </div>
        <div class="option">
        a) class having only single form
        </div>
        <div class="option">
        b) class having four forms
        </div>
        <div class="option">
        c) class having many forms
        </div>
        <div class="option">
        d) class having two forms
        </div>
        <button class='view' data-target='answer25'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer25" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: Polymorphism is literally meant class having many forms.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
            26. Pick the incorrect statement about inline functions in C++?
        </div>
        <div class="option">
        a) Saves overhead of a return call from a function
        </div>
        <div class="option">
        b) They are generally very large and complicated function
        </div>
        <div class="option">
        c) These functions are inserted/substituted at the point of call
        </div>
        <div class="option">
        d) They reduce function call overheads
        </div>
        <button class='view' data-target='answer26'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer26" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: Inline are functions that are expanded when it is called. The whole code of the inline function gets inserted/substituted at the point of call. In this, they help in reducing the function call overheads. Also they save overhead of a return call from a function. Inline functions are generally kept small.
            </div>
        </div>
    </div>
    
    <div class="">
        <p></p>
        <div class="question">
        27. What is abstract class in C++?
        </div>
        <div class="option">
        a) Any Class in C++ is an abstract class
        </div>
        <div class="option">
        b) Class from which any class is derived
        </div>
        <div class="option">
        c) Class specifically used as a base class with atleast one virtual functions
        </div>
        <div class="option">
        d) Class specifically used as a base class with atleast one pure virtual functions
        </div>
        <button class='view' data-target='answer27'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer27" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             An abstract class is defined as a class which is specifically used as a base class. An abstract class should have atleast one pure virtual function.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
            28. Which of the following constructors are provided by the C++ compiler if not defined in a class?
        </div>
        <div class="option">
        a) Copy constructor
        </div>
        <div class="option">
        b) Default constructor
        </div>
        <div class="option">
        c) Assignment constructor
        </div>
        <div class="option">
        d) All of the mentioned
        </div>
        <button class='view' data-target='answer28'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer28" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            If a programmer does not define the above constructors in a class the C++ compiler by default provides these constructors to avoid error on basic operations.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        29. Which concept allows you to reuse the written code in C++?
        </div>
        <div class="option">
        a) Inheritance
        </div>
        <div class="option">
        b) Polymorphism
        </div>
        <div class="option">
        c) Abstraction
        </div>
        <div class="option">
        d) Encapsulation
        </div>
        <button class='view' data-target='answer29'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer29" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             Inheritance allows you to reuse your already written code by inheriting the properties of written code into other parts of the code, hence allowing you to reuse the already written code.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        30. How structures and classes in C++ differ?
        </div>
        <div class="option">
        a) Structures by default hide every member whereas classes do not
        </div>
        <div class="option">
        b) In Structures, members are public by default whereas, in Classes, they are private by default
        </div>
        <div class="option">
        c) Structures cannot have private members whereas classes can have
        </div>
        <div class="option">
        d) In Structures, members are private by default whereas, in Classes, they are public by default
        </div>
        <button class='view' data-target='answer30'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer30" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             Structure members are public by default whereas, class members are private by default. Both of them can have private and public members.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
            31) Which of the following is the correct syntax to print the message in C++ language?
        </div>
        <div class="option">
        a) cout <<"Hello world!";
        </div>
        <div class="option">
        b) Cout << Hello world! ;
        </div>
        <div class="option">
        c) Out <<"Hello world!;
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer31'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer31" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             To print the message in the C++ language user can use the following syntax:
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        32) Which of the following is the correct identifier?
        </div>
        <div class="option">
        a) $var_name
        </div>
        <div class="option">
        b) VAR_123
        </div>
        <div class="option">
        c) varname@
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer32'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer32" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             There are some certain rules that must be followed by the users while writing the identifiers.<br>
             - It may contain uppercase/lowercase letters, digits, and      underscore (_) only.
             -It always starts only with non-digit characters.
             - It should not contain any special characters like $, @etc
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        33) Which of the following is the address operator?
        </div>
        <div class="option">
        a) $@
        </div>
        <div class="option">
        b) #
        </div>
        <div class="option">
        c) &
        </div>
        <div class="option">
        d) %
        </div>
        <button class='view' data-target='answer33'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer33" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             To print the address of any variable, a user can use the "&" operator. To understand it more clearly, consider the following example:
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        34) Which of the following features must be supported by any programming language to become a pure object-oriented programming language?
        </div>
        <div class="option">
        a) Encapsulation
        </div>
        <div class="option">
        b) Inheritance
        </div>
        <div class="option">
        c) Polymorphism
        </div>
        <div class="option">
        d) All of the above
        </div>
        <button class='view' data-target='answer34'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer34" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             There is nothing that forces a user to use the OOP concept in C++. In contrast, it is necessary for a programming language that it must support all three features as encapsulation, inheritance, and polymorphism completely to become a pure Object-Oriented Language.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        35) The programming language that has the ability to create new data types is called___.
        </div>
        <div class="option">
        a) Encapsulated
        </div>
        <div class="option">
        b) Reprehensible
        </div>
        <div class="option">
        c) Polymorphism
        </div>
        <div class="option">
        d) Extensible
        </div>
        <button class='view' data-target='answer35'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer35" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             A language that can generate the new data types is known as the extensible languages as they can handle the new data types.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
            36) Which of the following is the correct syntax to read the single character to console in the C++ language?
        </div>
        <div class="option">
        a) Read ch()
        </div>
        <div class="option">
        b) Getline vh()
        </div>
        <div class="option">
        c) get(ch)
        </div>
        <div class="option">
        d) Scanf(ch)
        </div>
        <button class='view' data-target='answer36'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer36" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             The "cin.get()" is one of the several functions provided in C++ language that is used to read the single or multiple characters to console.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        37) Which of the following features is required to be supported by the programming language to become a pure object-oriented programming language?
        </div>
        <div class="option">
        a) Encapsulation
        </div>
        <div class="option">
        b) Inheritance
        </div>
        <div class="option">
        c) Polymorphism
        </div>
        <div class="option">
        d) All of the above
        </div>
        <button class='view' data-target='answer37'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer37" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             There is nothing that forces a user to use the OOP concept in C++. In contrast, it is necessary for a programming language that it must support all three features of Encapsulation, Inheritance, and Polymorphism completely to become a Pure Object-Oriented Language.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        38) Which of the following statements is correct about the formal parameters in C++?
        </div>
        <div class="option">
        a) Parameters with which functions are called
        </div>
        <div class="option">
        b) Parameters which are used in the definition of the function
        </div>
        <div class="option">
        c) Variables other than passed parameters in a function
        </div>
        <div class="option">
        d) Variables that are never used in the function
        </div>
        <button class='view' data-target='answer38'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer38" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             Parameters that are used in the body of the function are known as formal parameters. These parameters represent the parameters passed to the function and are only used inside the function's body.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        39) Which of the following comment syntax is correct to create a single-line comment in the C++ program?
        </div>
        <div class="option">
        a) //Comment
        </div>
        <div class="option">
        b) /Comment/
        </div>
        <div class="option">
        c) Comment//
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer39'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer39" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: To create a single line comment (or one-line comment) in C++ program one can use the "// write comment" syntax. We can understand it more easily with the help of following given Program:
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        40) C++ is a ___ type of language.
        </div>
        <div class="option">
        a) High-level Language
        </div>
        <div class="option">
        b) Low-level language
        </div>
        <div class="option">
        c) Middle-level language
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer40'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer40" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             C++ contains the features of both types of high and Low-level programming languages, and it is also not wrong if we call it the combination of both high and low-level languages.
            </div>
        </div>
    </div>
    
    <div class="">
        <p></p>
        <div class="question">
        41) Which of the following refers to characteristics of an array?
        </div>
        <div class="option">
        a) An array is a set of similar data items
        </div>
        <div class="option">
        b) An array is a set of distinct data items
        </div>
        <div class="option">
        c) An array can hold different types of datatypes
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer41'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer41" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             Basically, an array is a set of similar data items that are stored in the contiguous memory blocks. You can access any data item randomly using the index address of the element s.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        42) Which of the following is the correct syntax for declaring the array?
        </div>
        <div class="option">
        a) init array []
        </div>
        <div class="option">
        b) int array [5];
        </div>
        <div class="option">
        c) Array[5];
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer42'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer42" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             To declare an array in C++, we first need to specify its data type according to requirements such as int or char, afterward that the array's name and the size of the array. So the correct answer will be B.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        43) Which of the following is the correct syntax for printing the address of the first element?
        </div>
        <div class="option">
        a) array[0];
        </div>
        <div class="option">
        b) array[1];
        </div>
        <div class="option">
        c) Array[2];
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer43'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer43" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             To print or access the first data item of the array, the correct syntax is "array[0];" because the array's index begins with zero instead of one. So the correct answer will be A.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
            44) Which of the following gives the 4th element of the array?
        </div>
        <div class="option">
        a) array[0];
        </div>
        <div class="option">
        b) array[1];
        </div>
        <div class="option">
        c) Array[3];
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer44'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer44" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             The index of the array begins with zero instead of 1. To print the 4th element of the array, the index number will be n-1 or (3);
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        45) Which type of memory is used by an Array in C++ programming language?
        </div>
        <div class="option">
        a) Contiguous
        </div>
        <div class="option">
        b) None-contiguous
        </div>
        <div class="option">
        c) Both A and B
        </div>
        <div class="option">
        d) Not mentioned
        </div>
        <button class='view' data-target='answer45'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer45" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             In the C and C++ programming language, the memory used by an array is usually contiguous, which means when an array is declared or initialized in the program a block of memory is selected form the memory space immediately. The major drawback of an array is that users have to guess the size of the array before actually using it, in which a significant amount of memory will be occupied even when it is not used. This later creates the problem of lack of memory.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        46) How many types of the array are there in the C++ programming language?
        </div>
        <div class="option">
        a) In the C++ programming language, there are three types of arrays
        </div>
        <div class="option">
        b) In the C++ programming language, there are four types of arrays
        </div>
        <div class="option">
        c) In the C++ programming language, there are two types of arrays
        </div>
        <div class="option">
        d) Both A and B
        </div>
        <button class='view' data-target='answer46'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer46" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: In the C++ programming language, there are mainly two types of arrays that are Single Dimension arrays and Multi-Dimension arrays. In Single-Dimension arrays, the same types of values are hold in the form of a List, while on the other hand, in Multi-Dimension arrays; values are stored in the form of a matrix.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        47) How many types of the array are there in the C++ programming language?
        </div>
        <div class="option">
        a) In the C++ programming language, there are three types of arrays
        </div>
        <div class="option">
        b) In the C++ programming language, there are four types of arrays
        </div>
        <div class="option">
        c) In the C++ programming language, there are two types of arrays
        </div>
        <div class="option">
        d) Both A and B
        </div>
        <button class='view' data-target='answer47'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer47" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: In the C++ programming language, there are mainly two types of arrays that are Single Dimension arrays and Multi-Dimension arrays. In Single-Dimension arrays, the same types of values are hold in the form of a List, while on the other hand, in Multi-Dimension arrays; values are stored in the form of a matrix.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        48) In C++, for what purpose the "rank()" is used?
        </div>
        <div class="option">
        a) It returns the size of each dimension
        </div>
        <div class="option">
        b) It returns the maximum number of elements that can be stored in the array
        </div>
        <div class="option">
        c) It returns the dimension of the specified array
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer48'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer48" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             In C++, one can use the rank function where he wants to know about the dimensions( e.g., single-dimension, multi-dimension) of a specific array by just passing it to the "rank()" function.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        49) Which one of the following is the correct definition of the "is_array();" function in C++?
        </div>
        <div class="option">
        a) It checks that the specified variable is of the array or not
        </div>
        <div class="option">
        b) It checks that the specified array of single dimension or not
        </div>
        <div class="option">
        c) It checks that the array specified of multi-dimension or not
        </div>
        <div class="option">
        d) Both B and C
        </div>
        <button class='view' data-target='answer49'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer49" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             In C++, the "is_array();" is used for checking that the specified element or data item belongs to the array type or not.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        50) What did we call an array of the one-dimensional array?
        </div>
        <div class="option">
        a) Single Dimensional array
        </div>
        <div class="option">
        b) Multi-Dimensional array
        </div>
        <div class="option">
        c) 2D Array (or 2-Dimensional array)
        </div>
        <div class="option">
        d) Both B and C
        </div>
        <button class='view' data-target='answer50'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer50" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: An array of one-dimensional array is known as the 2-dimensional array or 2D Array-like . We can understand it more clearly with the help of the following example:<br>
            Initialization of 2-Dimensional Array<br>
            int array[2][3]={ {3,2,5} , {9,5,4} }  <br>
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        51) Which types of arrays are always considered as linear arrays?
        </div>
        <div class="option">
        a) Single Dimensional
        </div>
        <div class="option">
        b) Multi-Dimensional
        </div>
        <div class="option">
        c) Both A and B
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer51'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer51" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             Single-dimensional arrays are always considered as linear arrays.

            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        52) Which of the following can be considered as the object of an array?
        </div>
        <div class="option">
        a) Index of an array
        </div>
        <div class="option">
        b) Elements of the Array
        </div>
        <div class="option">
        c) Functions of the Array
        </div>
        <div class="option">
        d) All of the above
        </div>
        <button class='view' data-target='answer52'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer52" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             The elements in the array are known as the objects of the array.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        53) How many types of elements can an array store?
        </div>
        <div class="option">
        a) Char and int type
        </div>
        <div class="option">
        b) Elements of the Array
        </div>
        <div class="option">
        c) Only char types
        </div>
        <div class="option">
        d) All of the above
        </div>
        <button class='view' data-target='answer53'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer53" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             An array can hold several elements except that all the data elements are of the same type.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        54) Elements of a one-dimensional array are numbered as 0,1,2,3,4,5, and so on; these numbers are known as ____
        </div>
        <div class="option">
        a) Subscript of Array
        </div>
        <div class="option">
        b) Members of Array
        </div>
        <div class="option">
        c) Index values
        </div>
        <div class="option">
        d) Both A and C
        </div>
        <button class='view' data-target='answer54'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer54" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             The elements of one-dimensional array are indexed as 0,1,2,3,... and these numbers are also known as the index values or subscripts of the array.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        55) Which of the following statement is true about the new and malloc?<br>
        I. The "new" is a type of operator while "malloc" is a kind of function<br>
        II. "new" invokes a constructor, whereas "malloc" does not invoke the constructor<br>
        III. "malloc" returns void pointer and also needed to typecast whereas "new" returns required the pointe
        </div>
        <div class="option">
        a) Only I
        </div>
        <div class="option">
        b) Both I and II
        </div>
        <div class="option">
        c) I, II, III
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer55'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer55" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             All statements mentioned in the above question are completely true about the "malloc" and the "new." The "malloc" is a kind of function available in the C++ language, while the "new" is a type of operator that invokes the Constructor.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        56) Which of the following can be considered as the correct syntax for declaring an array of pointers of integers that has a size of 10 in C++?
        </div>
        <div class="option">
        a) int arr = new int[10];
        </div>
        <div class="option">
        b) int *arr = new int*[10]
        </div>
        <div class="option">
        c) int **arr = new int*[10];
        </div>
        <div class="option">
        d) int *arr = new int[10];
        </div>
        <button class='view' data-target='answer56'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer56" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: To declare an array of integers' pointer, here we need to use the double-pointer array where every element is set of the pointer to the integers. Therefore the correct option is C.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        57) Which of the following can be considered as the members that can be inherited but not accessible in any class?
        </div>
        <div class="option">
        a) Public
        </div>
        <div class="option">
        b) Protected
        </div>
        <div class="option">
        c) Private
        </div>
        <div class="option">
        d) Both A and C
        </div>
        <button class='view' data-target='answer57'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer57" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             The "Private" member of a class can be inherited by the child class. Still, the child class cannot access them (Or we can say that they are not accessible from the child class).
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        58) Which of the following can be used to create an abstract class in the C++ programming language?
        </div>
        <div class="option">
        a) By using the pure virtual function in the class
        </div>
        <div class="option">
        b) By declaring a virtual function in the base class
        </div>
        <div class="option">
        c) By declaring the virtual keyword afterward, the class Declaration
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer58'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer58" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: A class must contain at least one declaration of the pure virtual function in itself to be called an abstract class. Therefore to make an abstract class, one has to declare at least one pure virtual function in that class.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        59) Which of the following statements is correct about the class?
        </div>
        <div class="option">
        a) An object is an instance of its class
        </div>
        <div class="option">
        b) A class is an instance of its object
        </div>
        <div class="option">
        c) An object is the instance of the data type of that class
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer59'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer59" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             Generally, an object is an instance of a class, e.g., an object represents the class.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        60) Which of the following statements is correct about the friend function in C++ programming language?
        </div>
        <div class="option">
        a) A friend function is able to access private members of a class
        </div>
        <div class="option">
        b) A friend function can access the private members of a class
        </div>
        <div class="option">
        c) A friend function is able to access the public members of a class
        </div>
        <div class="option">
        d) All of the above
        </div>
        <button class='view' data-target='answer60'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer60" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             A friend function can access any member of a class without caring about the type of member it contains, such as public, private, and protected.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        61) Which of the following statement is not true about C++?
        </div>
        <div class="option">
        a) Members of a class are public by default
        </div>
        <div class="option">
        b) A class cannot have the private members
        </div>
        <div class="option">
        c) A structure can have the member functions
        </div>
        <div class="option">
        d) All of the above
        </div>
        <button class='view' data-target='answer61'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer61" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             In C, structures are not allowed to have member functions; while on the other hand, C++ allows the structure to have the member functions. Members of the class are generally private by default, and those of the structures are public. So it is a completely false statement that classes can not private members.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        62) Which of the following statement is not true about C++?<br>
        I. In an object-oriented programming language, all the function calls are resolved at compile-time.<br>
        II. In a procedure programming language, all the function calls are resolved at compile-time
        </div>
        <div class="option">
        a) Only II
        </div>
        <div class="option">
        b) Only I
        </div>
        <div class="option">
        c) Both I & II
        </div>
        <div class="option">
        d) All of the above
        </div>
        <button class='view' data-target='answer62'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer62" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             In a procedure programming language such as C, we do not have the concept of Polymorphism, so all function calls are resolved at the compile-time while, on the other hand, In an Object-Oriented language, through the concept of Polymorphism, all function calls cannot be resolved at the compile-time.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        63) Which one of the following cannot be used with the virtual keyword?
        </div>
        <div class="option">
        a) Constructor
        </div>
        <div class="option">
        b) Destructor
        </div>
        <div class="option">
        c) Member function
        </div>
        <div class="option">
        d) All of the above
        </div>
        <button class='view' data-target='answer63'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer63" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             In C++, we cannot use the virtual keyword with the Constructor because constructors are generally defined to initialize the object of a specific class; hence no other class requires the other class's object.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        64) Which of the following statements supports that reusable code should be one of the desirable features of any language?
        </div>
        <div class="option">
        a) It helps in reducing the maintenance cost
        </div>
        <div class="option">
        b) It helps in reducing the testing time
        </div>
        <div class="option">
        c) It helps in reducing both the maintenance time and testing time
        </div>
        <div class="option">
        d) It helps in reducing the compile time
        </div>
        <button class='view' data-target='answer64'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer64" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: While reusing the existing code, we are not required to test/check that code, again and again, because it was already tested while it was written for the very first time. So the reusing the code defiantly helps in reducing the maintenance and testing time.<br>
            While reusing the existing code, the compile-time most likely to be increased or remain the same, and it is obvious because we use the existing code in our program to save our time( or to include any specific functionality) by which the size of the overall program gets grows which is natural.

            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        65) Which of the following statement is correct about the C++ programming language?
        </div>
        <div class="option">
        a) In C++, both the Static and Dynamic type checking are allowed
        </div>
        <div class="option">
        b) In C++, member function are allowed to be of the type canst
        </div>
        <div class="option">
        c) In C++, Dynamic checking is allowed
        </div>
        <div class="option">
        d) None of the above
        </div>
        <button class='view' data-target='answer65'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer65" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             In C++, both types of static and dynamic checking are allowed.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        66) What will happen if "In a C++ program a class has no name"?
        </div>
        <div class="option">
        a) It is not even allowed in C++
        </div>
        <div class="option">
        b) It will not have the Constructor
        </div>
        <div class="option">
        c) It will not have the destructor
        </div>
        <div class="option">
        d) Both B and C
        </div>
        <button class='view' data-target='answer66'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer66" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">c</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             In the C++ program, if we use a class without assigning a name. As a result, it will not be going to have a destructor, but it will have the object.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        67) What will happen if "In a C++ program a class has no name"?
        </div>
        <div class="option">
        a) Left to right
        </div>
        <div class="option">
        b) Top to bottom
        </div>
        <div class="option">
        c) Right to left
        </div>
        <div class="option">
        d) Bottom-up
        </div>
        <button class='view' data-target='answer67'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer67" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
            Explanation: Generally, C++ uses the Bottom-up approach while other programming languages like C use the top-down approach.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        68) Among the following given options, which can be considered as a member of a class?
        </div>
        <div class="option">
        a) Class variable
        </div>
        <div class="option">
        b) Member variable
        </div>
        <div class="option">
        c) Class functions
        </div>
        <div class="option">
        d) Both A and B
        </div>
        <button class='view' data-target='answer68'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer68" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">b</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             Generally, the functions of any class are also considered as the member function of that class.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        69) Which of the following refers to using the existing code instead of rewriting it?
        </div>
        <div class="option">
        a) Inheritance
        </div>
        <div class="option">
        b) Encapsulation
        </div>
        <div class="option">
        c) Abstraction
        </div>
        <div class="option">
        d) Both A and B
        </div>
        <button class='view' data-target='answer69'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer69" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">a</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             With the help of the inheritance concept, one can use existing code instead of rewriting. We can do this by inheriting the properties of pre-written code in other parts of the code blocks. Therefore the user is not required to write the same code repeatedly.
            </div>
        </div>
    </div>

    <div class="">
        <p></p>
        <div class="question">
        70) Which of the following statements is true about the C++ programming language?
        </div>
        <div class="option">
        a) C++ is an object-oriented programming language
        </div>
        <div class="option">
        b) C++ is a procedural programming language
        </div>
        <div class="option">
        c) C++ is a functional programming language
        </div>
        <div class="option">
        d) C++ is both procedural and object-oriented language
        </div>
        <button class='view' data-target='answer70'>
            <i class="fa fa-eye"></i> View Answer
        </button>
        <div id="answer70" class="answeroff">
            <div class="text-black">Answer: <span class="font-semibold">d</span> </div>
            <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>
             C++ is a type of programming language which supports both the procedural ( or step by step instructions) and object-oriented through the concept of classes.
            </div>
        </div>
    </div>
    
    </div>





<!-- Add more questions and answers following the same pattern -->

<script src="../Assets/jquery-3.6.0.min.js"></script>
<script src="../js/cpp_practice_answers.js"></script>
<!-- <script src="../Assets/tailwind.js"></script> -->

</body>
</html>
