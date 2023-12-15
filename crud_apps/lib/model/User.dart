class User {
  int? id;
  String? name;
  String? contact;
  String? description;
  String? address;

  User({this.id, this.name, this.contact, this.description, this.address});

  // String? description;
  // userMap() {
  //   var mapping = <String, dynamic>{};
  //   mapping['id'] = id;
  //   mapping['name'] = name!;
  //   mapping['contact'] = contact!;
  //   mapping['description'] = description!;
  //   mapping['address'] = address!;
  //   return mapping;
  // }

  User.fromMap(Map<String, dynamic> map) {
    id = map['id'];
    name = map['name'];
    contact = map['contact'];
    description = map['description'];
    address = map['address'];
  }

  // Method to convert User object to a map
  Map<String, dynamic> userMap() {
    return {
      'id': id,
      'name': name,
      'contact': contact,
      'description': description,
      'address': address,
    };
  }
}
