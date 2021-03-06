const dateUser = require('../models/NoSQL/dateUser')

module.exports = {
  async store(req, res) {

    const authDate = res.locals.authDate.user

    const { latitude, longitude } = req.body

    const location = {
      type: 'Point',
      coordinates: [longitude, latitude],
    }

    await dateUser.create({
      id_user: authDate.id,
      name: authDate.name,
      location: location,
    }).then(() => {
      return res.status(200).send({success: true, message: 'dados do usuario cadastrado com sucesso', dateUser})
    }).catch((err) => {
      return res.status(401).send({sucess: false, message: err})
    })
  },

  async index(req, res) {

    const authDate = res.locals.authDate.user

    await dateUser.findOne({
      id_user: authDate.id_user,
    }).then((user) => {
      return res.status(200).send({success: true, data: user})
    }).catch((err) => {
      return res.status(401).send({sucess: false, message: err})
    })
  }
}