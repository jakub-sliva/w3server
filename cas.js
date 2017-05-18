Document.Write "<SPAN ID=""span_Timer"">" & Now() & "</SPAN>"
SetTimeout "UpdateTimer()", 1000
Function UpdateTimer()
span_Timer.InnerText = Now()
SetTimeout "UpdateTimer()", 1000
End Function