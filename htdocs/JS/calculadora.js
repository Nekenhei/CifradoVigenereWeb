function calcula(operacion){
    var operando1 = document.calc.operando1.value
    var operando2 = document.calc.operando2.value
    var error = false
    if (operacion=="/" && operando2==0){
    	error = true;
    	document.calc.resultado.value = "Error. Division entre 0"
    };
    if (error==false) {
    	var result = eval(operando1 + operacion + operando2)
		document.calc.resultado.value = result
    };
}

function cofactores3(){
    //variables
    var a = document.cofactor.a.value
    var b = document.cofactor.b.value
    var c = document.cofactor.c.value
    var d = document.cofactor.d.value
    var e = document.cofactor.e.value
    var f = document.cofactor.f.value
    var g = document.cofactor.g.value
    var h = document.cofactor.h.value
    var i = document.cofactor.i.value
    var error = false
    //menores
    var m1 = (e*i)-(h*f)
    var m2 = (d*i)-(g*f)
    var m3 = (d*h)-(g*e)
    var m4 = (b*i)-(h*c)
    var m5 = (a*i)-(g*c)
    var m6 = (a*h)-(g*b)
    var m7 = (b*f)-(e*c)
    var m8 = (a*f)-(d*c)
    var m9 = (a*e)-(d*b)

    document.cofactor.m1.value = m1
    document.cofactor.m2.value = m2
    document.cofactor.m3.value = m3
    document.cofactor.m4.value = m4
    document.cofactor.m5.value = m5
    document.cofactor.m6.value = m6
    document.cofactor.m7.value = m7
    document.cofactor.m8.value = m8
    document.cofactor.m9.value = m9

    //cofactores
    var c1 = m1*((-1)^2) 
    var c2 = m2*((-1)^3)
    var c3 = m3*((-1)^4)
    var c4 = m4*((-1)^3)
    var c5 = m5*((-1)^4)
    var c6 = m6*((-1)^5)
    var c7 = m7*((-1)^4)
    var c8 = m8*((-1)^5)
    var c9 = m9*((-1)^6)

    document.cofactor.c1.value = c1
    document.cofactor.c2.value = c2
    document.cofactor.c3.value = c3
    document.cofactor.c4.value = c4
    document.cofactor.c5.value = c5
    document.cofactor.c6.value = c6
    document.cofactor.c7.value = c7
    document.cofactor.c8.value = c8
    document.cofactor.c9.value = c9

    //ADJUNTA
    
    document.cofactor.a1.value = c1
    document.cofactor.a2.value = c4
    document.cofactor.a3.value = c7
    document.cofactor.a4.value = c2
    document.cofactor.a5.value = c5
    document.cofactor.a6.value = c8
    document.cofactor.a7.value = c3
    document.cofactor.a8.value = c6
    document.cofactor.a9.value = c9

    //INVERSA
    var ds = a((e*i)-(h*f)) - b((d*i)-(g*f)) + c((d*h)-(g*e))
    var i1 = c1/ds
    var i2 = c4/ds
    var i3 = c7/ds
    var i4 = c2/ds
    var i5 = c5/ds
    var i6 = c8/ds
    var i7 = c3/ds
    var i8 = c6/ds
    var i9 = c9/ds

    document.cofactor.i1.value = i1
    document.cofactor.i2.value = i2
    document.cofactor.i3.value = i3
    document.cofactor.i4.value = i4
    document.cofactor.i5.value = i5
    document.cofactor.i6.value = i6
    document.cofactor.i7.value = i7
    document.cofactor.i8.value = i8
    document.cofactor.i9.value = i9
}


function determinante3(determina3){
    //variables
    var a = document.calc.a.value
    var b = document.calc.b.value
    var c = document.calc.c.value
    var d = document.calc.d.value
    var e = document.calc.e.value
    var f = document.calc.f.value
    var g = document.calc.g.value
    var h = document.calc.h.value
    var i = document.calc.i.value
    var b1 = document.calc.b1.value
    var b2 = document.calc.b2.value
    var b3 = document.calc.b3.value
    var ds = a((e*i)-(h*f)) - b((d*i)-(g*f)) + c((d*h)-(g*e))
    var dx = b1((e*i)-(h*f)) - b((b2*i)-(b3*f)) + c((b2*h)-(b3*e))
    var dy = a((b2*i)-(b3*f)) - b1((d*i)-(g*f)) + c((d*b3)-(g*b2))
    var dz = a((e*b3)-(h*b2)) - b((d*b3)-(g*b2)) + c((d*h)-(g*e))
    var x = dx/ds
    var y = dy/ds
    var z = dz/ds

}
