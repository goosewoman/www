@echo off
java -Xmx512M -Xms200M -Djava.library.path=C:\Users\PEBKAC\Desktop\Games\.minecraft\bin\natives -cp C:\Users\PEBKAC\Desktop\Games\.minecraft\bin\minecraft.jar;C:\Users\PEBKAC\Desktop\Games\.minecraft\bin\jinput.jar;C:\Users\PEBKAC\Desktop\Games\.minecraft\bin\lwjgl.jar;C:\Users\PEBKAC\Desktop\Games\.minecraft\bin\lwjgl_util.jar net.minecraft.client.Minecraft <username> <password>
pause