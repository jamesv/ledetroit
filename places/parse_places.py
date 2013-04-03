import csv
with open('places.csv', 'rb') as csvfile:
    reader = csv.reader(csvfile, delimiter=',', quotechar='"')
    for row in reader:
        if row[8] == '':
            print "-----------------------"
        else:
            if(row[9] == ''):
                photos = '0'
            else:
                photos = row[9]
                
            print '{"id":"%s","name":"%s","address":"%s","phone":"%s","url":"%s","photos":%s, "details":"%s"},' % (row[8], row[0].replace('\n', ' '),row[1].replace('\n', ' '),row[2].replace('\n', ' '),row[5].replace('\n', ' '),photos,row[10].replace('\n', ' '))