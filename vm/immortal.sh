qemu-system-x86_64 -name immortal -enable-kvm -localtime -m 512 -hda vm//immortal.qcow2 -fsdev local,id=share0,path=vm//immortal,security_model=mapped -device virtio-9p-pci,fsdev=share0,mount_tag=host -netdev vde,sock=vm//s1,port=2,id=s1 -device e1000,netdev=s1,mac=AA:AA:AA:AA:01:00 -netdev vde,sock=vm//s2,port=1,id=s2 -device e1000,netdev=s2,mac=AA:AA:AA:AA:01:01 -kernel /autofs/netapp/travail/siduret/mastercsi-ter/quemunet/images/debian10.vmlinuz -initrd /autofs/netapp/travail/siduret/mastercsi-ter/quemunet/images/debian10.initrd -append "root=/dev/sda1 rw net.ifnames=0 console=ttyS0" -nographic
