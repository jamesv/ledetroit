import csv
with open('events.csv', 'rb') as csvfile:
    reader = csv.reader(csvfile, delimiter=',', quotechar='"')
    for row in reader:
        if row[0] == '':
            print "-----------------------"
        else:
            print '{"id":"%s","masthead":"%s","name":"%s","address":"%s","date":"%s","time":"%s","url":"%s"},' % (row[7],row[0].replace('\n', ' '), row[0].replace('\n', ' '),row[5].replace('\n', ' '),row[1].replace('\n', ' '),row[4].replace('\n', ' '),row[6].replace('\n', ' '))