
import os
def rename_files():

    #(1) get file names from folder
    file_list = os.listdir(r"C:\Users\atale\Desktop\Python project\fun\fun")
    print (file_list)
    saved_path = os.getcwd()
    print("Current Working Directory is " +saved_path)
    os.chdir (r"C:\Users\atale\Desktop\Python project\fun\fun")

    #(2) for each file, rename filename
    for file_name in file_list:
        print ("Old name -"+file_name)
        table = file_name.maketrans(dict.fromkeys("0123456789"))
        print ("New name -"+file_name.translate(table))
        os.rename (file_name, file_name.translate(table))
    os.chdir (saved_path)

rename_files ()
