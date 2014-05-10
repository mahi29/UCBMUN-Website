file = open("js/committee.js","a+")
count = 0
while count < 12:
	file.write('$("#image'+str(count)+'").hoverClass();\n')
	count +=1