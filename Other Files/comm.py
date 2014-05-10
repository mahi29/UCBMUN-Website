print "Start"
file = open("committees.php","a+")
count = 1;
imgLinks = ['echr','unga','nss','dpko','unsc','chile','chevron','srilanka','adhoc','cia','mss','mossad','vevak']
while count < 13:
	file.write('<li class="span3">\n')
	file.write('<div class="thumbnail exploreThumbnail">\n')
	file.write('<a href="committee'+str(count)+'.php">\n')
	file.write('<img src="img/committeePictures/'+imgLinks[count]+'.jpg" class="image"/>\n')
	file.write('</a>\n')
	file.write('</div>\n')
	file.write('</li>\n')
	count += 1
print "Done"