import csv
with open('shows.csv', 'rb') as csvfile:
    reader = csv.reader(csvfile, delimiter=',', quotechar='"')
    for row in reader:
        if row[0] == '':
            print "-----------------------"
        else:
            print '{"id":"%s","name":"%s","masthead":"%s","venue":"%s","location":"%s","date":"%s","opener":"%s","details":"%s","url":"%s"},' % (row[10].strip().replace('\n', ''), row[0].strip().replace('\n', ' '), row[6].strip().replace('\n', '<br/>'), row[1], row[2].strip().replace('\n', ' '), row[3].strip().replace('\n', ' '), row[7].strip().replace('\n', ' '), row[8].strip(), row[9].strip())
            
            