resource "openstack_compute_instance_v2" "ubuntu-1" {
  name            = "ubuntu-1"
  image_id        = "bf420b24-7df0-485f-ae29-1f778c3d1df4"
  flavor_name     = "moyenne"
  key_pair        = "ssh-key"
  security_groups = ["default"]

  network {
    name = "prive"
  }
}

resource "openstack_compute_instance_v2" "ubuntu-2" {
  name            = "ubuntu-2"
  image_id        = "bf420b24-7df0-485f-ae29-1f778c3d1df4"
  flavor_name     = "moyenne"
  key_pair        = "ssh-key"
  security_groups = ["default"]

  network {
    name = "prive"
  }
}

resource "openstack_compute_instance_v2" "ubuntu-3" {
  name            = "ubuntu-3"
  image_id        = "bf420b24-7df0-485f-ae29-1f778c3d1df4"
  flavor_name     = "moyenne"
  key_pair        = "ssh-key"
  security_groups = ["default"]

  network {
    name = "prive"
  }
}

resource "openstack_compute_instance_v2" "ubuntu-4" {
  name            = "ubuntu-4"
  image_id        = "bf420b24-7df0-485f-ae29-1f778c3d1df4"
  flavor_name     = "moyenne"
  key_pair        = "ssh-key"
  security_groups = ["default"]

  network {
    name = "prive"
  }
}